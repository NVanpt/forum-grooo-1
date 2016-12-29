 @extends('default')
 @section('content')
 <div class="page-main">

      <!-- Forum Content Header -->
      <div class="page-header">
        <h1 class="page-title">Danh sách bình luận</h1>
        <form class="margin-top-20" action="#" role="search">
          <div class="input-search input-search-dark">
            <input type="text" class="form-control width-full" placeholder="Search..." name="">
            <button type="submit" class="input-search-btn">
              <i class="icon md-search" aria-hidden="true"></i>
            </button>
          </div>
        </form>
      </div>

      <!-- Forum Nav -->
      <div class="page-nav-tabs">
        <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
          <li class="active" role="presentation">
            <a data-toggle="tab" href="#forum-newest" aria-controls="forum-newest" aria-expanded="true"
            role="tab">Mới nhất</a>
          </li>
          <li role="presentation">
            <a data-toggle="tab" href="#forum-activity" aria-controls="forum-activity" aria-expanded="false"
            role="tab">Hoạt động</a>
          </li>
          <li role="presentation">
            <a data-toggle="tab" href="#forum-answer" aria-controls="forum-answer" aria-expanded="false"
            role="tab">Trả lời</a>
          </li>
        </ul>
      </div>

      <!-- Forum Content -->
      <div class="page-content tab-content page-content-table nav-tabs-animate">
        <div class="tab-pane animation-fade active" id="forum-newest" role="tabpanel">
          <table class="table is-indent">
            <tbody>
              <tr data-url="panel.tpl" data-toggle="slidePanel">
                <td class="pre-cell"></td>
                <td class="cell-60 responsive-hide">
                  <a class="avatar" href="javascript:void(0)">
                    <img class="img-responsive" src="../../../global/portraits/1.jpg"
                    alt="...">
                  </a>
                </td>
                <td>
                  <div class="content">
                    <div class="title">
                      Vicinum at aperta, torquem mox doloris illi, officiis.
                      <div class="flags responsive-hide">
                        <span class="sticky-top label label-round label-danger"><i class="icon md-caret-up-circle" aria-hidden="true"></i>TOP</span>
                        <i class="locked icon md-lock" aria-hidden="true"></i>
                      </div>
                    </div>
                    <div class="metas">
                      <span class="author">By Herman Beck</span>
                      <span class="started">1 day ago</span>
                      <span class="tags">Themes</span>
                    </div>
                  </div>
                </td>
                <td class="cell-80 forum-posts">
                  <span class="num">1</span>
                  <span class="unit">Post</span>
                </td>
                <td class="suf-cell"></td>
              </tr>
          </tbody>
      </table>
  </div>
</div>

 <button class="site-action btn-raised btn btn-success btn-floating" data-target="#addTopicForm"
  data-toggle="modal" type="button">
    <i class="icon md-edit" aria-hidden="true"></i>
  </button>

  <!-- Add Topic Form -->
  <div class="modal fade" id="addTopicForm" aria-hidden="true" aria-labelledby="addTopicForm"
  role="dialog" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" aria-hidden="true" data-dismiss="modal">×</button>
          <h4 class="modal-title">Create New Topic</h4>
        </div>
        <div class="modal-body container-fluid">
          <form>
            <div class="form-group">
              <label class="control-label margin-bottom-15" for="topicTitle">Topic Title:</label>
              <input type="text" class="form-control" id="topicTitle" name="title" placeholder="How To..."
              />
            </div>
            <div class="form-group">
              <textarea name="content" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-xs-6">
                  <label class="control-label margin-bottom-15" for="topicCategory">Topic Category:</label>
                  <select id="topicCategory" data-plugin="selectpicker">
                    <option>PHP</option>
                    <option>Javascript</option>
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>Ruby</option>
                  </select>
                </div>
                <div class="col-xs-6">
                  <label class="control-label margin-bottom-15" for="topic_tags">Topic Tags:</label>
                  <select id="topic_tags" data-plugin="selectpicker">
                    <option>PHP</option>
                    <option>Javascript</option>
                    <option>HTML</option>
                    <option>CSS</option>
                    <option>Ruby</option>
                  </select>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="modal-footer text-left">
          <button class="btn btn-primary" data-dismiss="modal" type="submit">Create</button>
          <a class="btn btn-sm btn-white btn-flat" data-dismiss="modal" href="javascript:void(0)">Cancel</a>
        </div>
      </div>
    </div>
  </div>
  <!-- End Add Topic Form -->
@endsection