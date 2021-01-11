<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:47:"./application/admin/template/inandout\index.htm";i:1609918866;}*/ ?>
<!--数据列表页面-->
<section class="content">

    <!--顶部搜索筛选-->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <form class="form-inline searchForm" id="searchForm" action="<?php echo url('index'); ?>" method="GET">

                        <div class="form-group">
                            <input value="<?php echo !empty($_keywords)?$_keywords : '' ;; ?>"
                                   name="_keywords" id="_keywords" class="form-control input-sm" placeholder="栏目名称">
                        </div>

                        <div class="form-group">
                            <input value="<?php echo (isset($update_time) && ($update_time !== '')?$update_time:''); ?>" readonly name="update_time" id="update_time"
                                   class="form-control input-sm indexSearchDateRange" placeholder="更新时间">
                        </div>
                        <script>
                            laydate.render({
                                elem: '#update_time',
                                type: 'date',
                                range: true,
                            });
                        </script>

                        <div class="form-group">
                            <select name="_order" id="_order" class="form-control input-sm index-order">
                                <option value="">排序字段</option>
                                <option value="website_id" <?php if(isset($_order) && $_order=='website_id'): ?>selected<?php endif; ?>>站点
                                </option>
                                <option value="status" <?php if(isset($_order) && $_order=='status'): ?>selected<?php endif; ?>>状态</option>
                                <option value="sort" <?php if(isset($_order) && $_order=='sort'): ?>selected<?php endif; ?>>排序</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="_by" id="_by" class="form-control input-sm index-order">
                                <option value="">排序方式</option>
                                <option value="asc" <?php if(isset($_by) && $_by=='asc'): ?>selected<?php endif; ?>>正序</option>
                                <option value="desc" <?php if(isset($_by) && $_by=='desc'): ?>selected<?php endif; ?>>倒序</option>
                            </select>
                        </div>
                        <script>
                            $('#_order').select2();
                            $('#_by').select2();
                        </script>

                        <div class="form-group">
                            <button class="btn btn-sm btn-primary" type="submit" onclick="showSearch()"><i
                                    class="fa fa-search"></i> 查询
                            </button>
                        </div>

                        <div class="form-group">
                            <button onclick="clearSearchForm()" class="btn btn-sm btn-default" type="button"><i
                                    class="fa  fa-eraser"></i> 清空查询
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="box">

                <!--数据列表顶部-->
                <div class="box-header">
                    <div>
                        <a title="添加" data-toggle="tooltip" class="btn btn-primary btn-sm " href="<?php echo url('add'); ?>">
                            <i class="fa fa-plus"></i> 添加
                        </a>
                        <a class="btn btn-danger btn-sm AjaxButton" data-toggle="tooltip" title="删除选中数据"
                           data-confirm-title="删除确认" data-confirm-content="您确定要删除选中的栏目吗？删除后将无法恢复，请谨慎操作！"
                           data-id="checked"
                           data-url="<?php echo url('del'); ?>">
                            <i class="fa fa-trash"></i> 删除
                        </a>
                        <a class="btn btn-success btn-sm ReloadButton" data-toggle="tooltip" title="刷新">
                            <i class="fa fa-refresh"></i> 刷新
                        </a>
                    </div>
                </div>

                <div class="box-body table-responsive">
                    <table class="table table-hover table-bordered datatable" width="100%">
                        <thead>
                        <tr>
                            <th>
                                <input id="dataCheckAll" type="checkbox" onclick="checkAll(this)" class="checkbox"
                                       placeholder="全选/取消">
                            </th>
                            <th>ID</th>
                            <th>栏目名称</th>
                            <th>链接地址</th>
                            <th>链接方式</th>
                            <th>所属站点</th>
                            <th>列表页模板</th>
                            <th>文档页模板</th>
                            <th>单页模板</th>
                            <th>是否可用</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php echo raw($data); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('_keywords').value = localStorage.getItem('searchWhat');

        function showSearch() {
            const a = document.getElementById('_keywords').value;
            localStorage.setItem('searchWhat', a);
        }
    </script>

</section>


