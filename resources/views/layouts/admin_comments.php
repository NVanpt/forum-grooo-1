 @extends('default')
 @section('content')
 <div class="page">

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
@endsection