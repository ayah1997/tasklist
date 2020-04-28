@extends('layouts.app')
@section('title', 'Task List')

@section('content')
<div class="col-sm-offset-2 col-sm-8">
    <div class="panel panel-default">
        <div class="panel-heading">
            New Task
        </div>

        <div class="panel-body">
            <!-- New Task Form -->
           
           
            <form action="{{url('update/'.$task_edit->id)}}" method="POST" class="form-horizontal">        
                @csrf
                @method('PATCH')

                <!-- Task Name -->
                <div class="form-group">
                    <label for="task-name" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control" value='' required>
                    </div>
                </div>

                <!-- Update Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-default">
                            <i></i> Update Task
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Current Tasks -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Current Tasks
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>Task</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>

                        @foreach ($tasks as $task)

                            <tr>
                               <td class="table-text">
                                   <div>{{$task->name}}</div>
                               </td>

                               <!-- Task Delete Button --> 
                               <td>
                               <form action="{{url('delete/'.$task->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                       <button type="submit" class="btn btn-danger">
                                            <i></i>Delete
                                       </button>
                                 </form>

                               </td>
                               
                               <!-- Task Update Button -->
                               <td>
                                <form action="{{url('edit/'.$task->id)}}" method="POST">
                                         @csrf
                                         
                                        <button type="submit" class="btn btn-primary">
                                             <i></i> Edit
                                        </button>
                                  </form>
                                  
                                </td>
                            </tr>
                      
                        @endforeach
                            
                    </tbody>
                </table>
            </div>
        </div>
</div>
    
@endsection