<?php

namespace app\admin;

class config extends Base
{

    public function initialize()
    {
        parent::initialize();
        $this->Administrator(6);
        $ca = db('action')->where('c', 'config_setting')->where('a', '<>', 'index')->select();
        $this->category_text = ['system' => '全局配置'];
        foreach ($ca as $v) {
            $this->category_text[$v['a']] = $v['name'];
        }
        $this->type_text = json_decode(IN_CONFIG_TYPE, true);
        $this->header();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        ?>
        <script>
            $('input[name=sort]').on('input', function () {
                var sort = $(this).val();
                console.log(sort)
                if (sort != $(this).attr('data-sort'))
                    $.ajax({
                        url: '?c=ajax&a=config_sort',
                        data: {id: $(this).attr('data-id'), sort: sort},
                        type: 'post',
                        success: function (ret) {
                            console.log(ret)
                        }
                    });
            });
        </script>
        <?php
        $this->footer();
    }

    function index($map = [])
    {
        $page = SafeRequest('page', 'get');
        $this->search = SafeRequest('search', 'get');
        $this->search && $map[] = ['title|name|group|note', 'like', "%$this->search%"];
        $this->category = SafeRequest('category', 'get');
        $this->category && $map[] = ['category', '=', $this->category];
        $this->type = SafeRequest('type', 'get');
        $this->type && $map[] = ['type', '=', $this->type];
        $list = db('config')->where($map)->order('category,group,status,sort,name')->paginate([
            'page' => $page
        ]);
        $result = $list->items();
        $render = getRender($list, $page);
        $count = $list->total();
        echo '<div class="container">';
        $this->nav3();
        $this->searchForm('可以输入名称等关键词进行搜索', '', function () {
            ?>
            <select name="category" onchange="document.btnsearch.submit();">
                <option value="">全部类别</option>
                <?php foreach ($this->category_text as $value => $label) { ?>
                    <option value="<?php echo $value ?>" <?php echo $this->category == $value ? 'selected="selected"' : '' ?>>
                        <?php echo $label ?>
                    </option>
                <?php } ?>
            </select>
            <select name="type" onchange="document.btnsearch.submit();">
                <option value="">全部类型</option>
                <?php foreach ($this->type_text as $value => $label) { ?>
                    <option value="<?php echo $value ?>" <?php echo $this->type == $value ? 'selected="selected"' : '' ?>>
                        <?php echo $label ?>
                    </option>
                <?php } ?>
            </select>
            <?php
        });
        echo '
<table class="tb tb2">
<tr><th class="partition">配置列表</th></tr>
</table>
<table class="tb tb2">
<tr class="header">
<th>ID</th>
<th>名称</th>
<th>变量名称</th>
<th>分组</th>
<th>类别</th>
<th>类型</th>
<th>排序</th>
<th>状态</th>
<th>编辑操作</th>
</tr>
';

        if ($count == 0) {
            echo '<tr><td colspan="2" class="td27">没有配置管理</td></tr>
';
        }

        if ($result) {
            foreach ($result as $item) {
                echo '<tr class="hover">
<td class="td25">' . $item['id'] . '</td>
<td>' . lightnum($item['title'], $this->search) . '</a></td>
<td>' . lightnum($item['name'], $this->search) . '</td>
<td>' . $this->category_text[$item['category']] . '</td>
<td>' . lightnum($item['group'], $this->search) . '</td>
<td>' . $this->type_text[$item['type']] . '</td>
<td><input type="text" name="sort" data-id="' . $item['id'] . '" value="' . $item['sort'] . '" data-value="' . $item['sort'] . '" style="width: 30px;"/></td>
<td>
<a href="?c=config&a=change_status&id=' . $item['id'] . '&status=' . ($item['status'] ? '0' : '1') . '&hash=' . $_COOKIE['in_adminpassword'] . '">
<img src="static/admincp/image/show_' . ($item['status'] ? 'yes' : 'no') . '.gif" />
</a>
</td>
<td>';
                echo '<a href="?c=config&a=edit&id=' . $item['id'] . '" class="act">编辑</a>';
                echo '</td></tr>';
            }
        }
        echo '</table></div>' . $render;
    }

    function edit()
    {
        $id = SafeRequest("id", "get");
        $arrname = $id ? '编辑' : '新增';
        $data = db('config')->where('id', $id)->find();
        echo '<div class="container">';
        $this->nav3();
        echo '<table class="tb tb2">
<form action="?c=config&a=save" method="post" name="form">
<input type="hidden" name="id" value="' . $id . '"/>
<input type="hidden" name="hash" value="' . $_COOKIE['in_adminpassword'] . '" />
<tr><th colspan="15" class="partition">' . $arrname . '配置</th></tr>
<tr><td colspan="2" class="td27">配置名称:</td></tr>
<tr><td class="vtop rowform">
<input type="text" class="txt" value="' . $data['title'] . '" name="title" id="title">
</td>
</tr>
<tr>';

        echo '<td colspan="2" class="td27">变量名称:' . ($id ? '<span style="color: red;">（禁止修改，如要变更，请修改数据库）</span>' : '') . '</td></tr>
<tr><td class="vtop rowform">
<input type="text" class="txt" name="name" id="name" value="' . $data['name'] . '" ' . ($id ? 'readonly' : '') . '>
</td>
</tr>
</tr>';

        echo '<tr><td colspan="2" class="td27">分类:</td></tr>
<tr><td class="vtop rowform">
<select name="category">';
        foreach ($this->category_text as $k => $v) {
            echo '<option value="' . $k . '" ' . ($data['category'] == $k ? 'selected' : '') . '>' . $v . '</option>';
        }
        echo '</select>
</td>
</tr>
<tr><td colspan="2" class="td27">分组:</td></tr>
<tr><td class="vtop rowform">
<input type="text" class="txt" name="group" id="group" value="' . $data['group'] . '">
</td>
</tr>
<tr><td colspan="2" class="td27">类型:</td></tr>
<tr><td class="vtop rowform">
<select name="type">';
        foreach ($this->type_text as $k => $v) {
            echo '<option value="' . $k . '" ' . ($data['type'] == $k ? 'selected' : '') . '>' . $v . '</option>';
        }
        echo '</select>
</td>
</tr>
<tr><td colspan="2" class="td27">描述:</td></tr>
<tr><td class="vtop rowform">
<textarea rows="6" name="note" class="tarea" id="note">' . $data['note'] . '</textarea>
</td>
</tr>
<tr><td colspan="2" class="td27">内容:<span style="color: red;">（此处为JSON格式，不懂勿动，默认：[0,100]）</span></td></tr>
<tr>
<td class="vtop rowform">
<textarea rows="6" name="content" class="tarea" id="note">' . $data['content'] . '</textarea>
</td>
</tr>
<tr><td colspan="15">
<div class="fixsel">
<input type="submit" class="btn" onclick="return CheckForm();" value="提交" />
</div>
</td></tr>
</form>
</table>
</div>
';
    }

    function save()
    {
        if (!submitcheck('hash', 1)) {
            $this->ShowMessage("表单来路不明，无法提交！", '?c=config', "infotitle3", 3000, 1);
        }
        $id = intval(SafeRequest("id", "post"));

        $title = SafeRequest("title", "post");
        if (!$title) {
            $this->ShowMessage("配置名称不能为空", '?c=config', "infotitle3", 3000, 1);
        }

        $name = SafeRequest("name", "post");
        if (!$name) {
            $this->ShowMessage("变量名称不能为空", '?c=config', "infotitle3", 3000, 1);
        }

        $note = SafeRequest("note", "post");
        $type = SafeRequest("type", "post");
        $category = SafeRequest("category", "post");
		$group = SafeRequest("group", "post");
        $content = SafeRequest("content", "post",1);
        !$content && $content = '[0, 100]';

        if (isJson($content) == false) {
            $this->ShowMessage("内容不是合法的JSON格式", '?c=config', "infotitle3", 3000, 1);
        }

        $data = [
            'name' => $name,
            'title' => $title,
            'type' => $type,
            'note' => $note,
            'category' => $category,
			'group' => $group,
            'content' => $content,
        ];
        if ($id) {
            $res = db('config')->where('id', $id)->update($data);
        } else {
			$config = db('config')->where('name', $name)->find();
            if ($config) {
                $this->ShowMessage("已存在相同的配置", '?c=config', "infotitle3", 3000, 1);
            }
			$data['value']='';
            $res = db('config')->insert($data);
        }
        $res && $this->ShowMessage("恭喜您，配置保存成功！", '?c=config', "infotitle2", 1000, 1);
        $this->ShowMessage("配置保存失败！请稍后重试！", '?c=config', "infotitle3", 3000, 1);
    }

    function change_status()
    {

        if (!submitcheck('hash', -1)) {
            $this->ShowMessage("链接来路不明，无法提交！", $_SERVER['HTTP_REFERER'], "infotitle3", 3000, 1);
        }
        $id = intval(SafeRequest("id", "get"));
        $status = intval(SafeRequest("status", "get"));
        $res = db('config')->where('id', $id)->update(['status' => $status]);
        $this->ShowMessage("恭喜您，状态切换成功！", "?c=config", "infotitle2", 1000, 1);
    }

}