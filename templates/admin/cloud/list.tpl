<div id="adminList" class="box-shadow">
	<table class="big_table" frame="box" rules="all">
		<thead>
			<tr>
				<th style="text-align: center; width: 20px;">#</th>
				<th><span>Title</span></th>
   			 	<th><span>Cloud</span></th>
   			 	<th><span>Thumbnail</span></th>
   				<th><span>Description</span></th>
   				<th><span>Category</span></th>
   				<th><span>viewCount</span></th>
   			 	<th><span>Date</span></th>
   			 	<th><span>User</span></th>
			</tr>
		</thead>
		 <tbody>
		<!-- BEGIN cloud_list -->
   		 <tr>
   			 <td style="text-align: center;">{ID}</td>
   			 <td>{TITLE}</td>
   			 <td>
   			 	<audio class="cloud" controls>
  					<source src={SOURCE} type="audio/mpeg">
				</audio>
   			 </td>
   			 <td>
   			 	<img class= "thumbnail" src= {SOURCETHUMBNAIL}>
   			 </td>
   			 <td>{DESCRIPTION}</td>
   			 <td>{CATEGORYNAME}</td>
   			 <td>{VIEWCOUNT}</td>
   			 <td>{DATE}</td>
   			 <td>{AUTHOR}</td>
   			 <td>
				<table  class="action_table">
    				<tr>
        				<td width="50%"><a href="{SITE_URL}/admin/cloud/update/id/{ID}/" title="Edit/Update" class="edit_state">Update</a></td>
        				<td width="50%"><a href="{SITE_URL}/admin/cloud/delete/id/{ID}/" title="Delete" class="delete_state">Delete</a></td>
    				</tr>
				</table>
			</td>
   			 
   		 </tr>
		<!-- END cloud_list -->
   	 </tbody>
	</table>

</div>