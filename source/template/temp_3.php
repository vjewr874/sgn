<script language="text/template" id="content">
        {{if checked}}
        <div class="template-3 template-wrap">
            {{else}}
            <div class="template-3 template-wrap passwords">
                {{/if}}
                <div class="t-bg-3"></div>
                <div class="container">
                    <div class="content">
                        <div class="template-common">
                            <div class="t-icon"><img src="{{icon}}" class="img-responsive"></div>
                            <div class="t-name">
                                <div class="tit">{{app_name}}</div>
                                <div class="name-info pc-pwd">
                                <span> {{VERSION}} {{version}}
                                        {{if version_code}}
                                    （Build {{version_code}}）
                                    {{/if}}</span>
                                    <span>{{SIZE}} {{app_size}}</span><span>{{UPDATE_TIME}} {{update_dt}}</span>
                                </div>
                            </div>
                            {{if checked|false}}
                            <!--密码框-->
                            <div class="template-pwd">
                                <div class="form-group">
                                    <label>{{REQUIRE_PWD}}</label>
                                    <input type="input" name="pwd" class="form-control">
                                </div>
                                <button type="button" class="ms-btn decoding" onclick="DAFU.submitPwd()">
                                    {{DOWNLOAD_ENTER}}
                                </button>
                                {{if auth_code_dispense_url}}
                                <div class="form-group">
                                    <a href="{{auth_code_dispense_url}}" class="ms-btn decoding" style="background-color: #fd6835;">{{BUY_AUTH_CODE}}</a>
                                </div>
                                {{/if}}
                               
                            </div>
                            <hr class="pc-pwd">
                            <!--/密码框-->
                            {{/if}}
                            {{if checked}}
                            <div id="showtext" style="text-align: center;margin-top:30px;display: none">
                                <div style="color: #1abc9c">{{VIEW_IN_DESKTOP}}</div>
                                <div class="loading"></div>
                            </div>
                            <div class="template-btn-wrap">
                                <a href="{{downurl}}" type="ios" class="ms-btn template-btn clearfix pc-pwd down_load">
                                    <span class="icon-36 iconfont fl"></span>
                                    <span class="fl">{{DOWNLOAD_INSTALL}}</span>
                                </a>
                                <a href="javascript:;" type="ios"
                                   class="ms-btn template-btn clearfix pc-pwd grey">
                                    <span class="fl">{{DOWNLOAD_INSTALL}}</span>
                                </a>
                            </div>
                            <div class="template-btn-wrap">
                                <a href="javascript:;" type="ios"
                                   class="ms-btn template-btn clearfix pc-pwd resign" style="display: none">
                                    <span class="fl">{{RESIGN}}</span>
                                </a>
                            </div>
                            <div class="t-apply pc-pwd">
                                {{if support|equals>3}}
                                {{FOR_IOS_AND_ANDROID}}
                                {{else}}
                                {{if support|equals>2}}
                                {{FOR_ANDROID}}
                                {{else}}
                                {{FOR_IOS}}
                                {{/if}}
                                {{/if}}
                            </div>
                            {{/if}}
                            <div class="t-code pc-pwd">
                                <img src="/qrcode?link={{qrcode_url}}" class="img-responsive">
                                <div class="code-text">{{SCAN_TIPS}}</div>
                            </div>
                            {{if app_intro}}
                            <div class="t-introduce pc-pwd">
                                <div class="tit">{{APP_DESCRIPTION}}</div>
                                <p>{{app_intro}}</p>
                            </div>
                            {{/if}}

                            {{if remark}}
                            <div class="t-introduce pc-pwd">
                                <div class="tit">{{APP_REMARK}}</div>
                                <p>{{remark}}</p>
                            </div>
                            {{/if}}
                            {{if qq}}
                            <div class="t-contact pc-pwd">
                                <div class="tit">{{APP_CONTACT}}</div>
                                <dl class="clearfix">
                                    <dd class="fl">{{qq}}</dd>
                                </dl>
                            </div>
                            {{/if}}

                            {{if screenshots}}
                            <div class="app-screen pc-pwd">
                                <div class="tit">{{APP_SCREENSHOTS}}</div>
                                <div class="s-responsive">
                                    {{screenshots}}
                                </div>
                            </div>
                            {{/if}}
                        </div>
                    </div>
                </div>
            </div>
    </script>