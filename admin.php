<!DOCTYPE html>
<html lang="en">
<head>
  <title>RIT eSports Admin Page</title>
  <?php include 'includes/head.php';?>
</head>
<body>
	
    <?php include 'includes/navmenu.php';?>
    
	<main id="add_news">

		<nav class="nav navbar-default">
		<button id="ChangeToggle" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		<span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
		</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav nav-pills nav-justified">
			<li><a href="#add_news" class="tab_active">Add News</a></li>
				<li><a href="#edit_news">Edit News</a></li>
				<li><a href="#add_team">Add Team</a></li>
				<li><a href="#edit_team">Edit Team</a></li>
				<li><a href="#add_match">Add Match</a></li>
				<li><a href="#edit_match">Edit Match</a></li>
			</ul>
			</div>
		</nav>
		
        <div class="row">
		    <h2 class="page_title">ADD NEWS</h2>
			<form>	  
				<div class="form-group">
					<label for="news_heading">News Heading</label>
					<text class="form-control" rows="1" id="newsheading"></text>
				</div>
				
				<div class="form-group">
					<label for="published_on">Published On</label>
					<text class="form-control" rows="1" id="published_on"></text>
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" rows="8" id="description"></textarea>
				</div>
			  
				<button type="button" class="btn btn-warning main_action_button">Publish</button>
			</div>			
			</form>
    </main>
    
    
    <main id="edit_news">
		<nav class="nav navbar-default">
		<button id="ChangeToggle" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		<span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
		</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav nav-pills nav-justified">
			<li><a href="#add_news">Add News</a></li>
				<li><a href="#edit_news" class="tab_active">Edit News</a></li>
				<li><a href="#add_team">Add Team</a></li>
				<li><a href="#edit_team">Edit Team</a></li>
				<li><a href="#add_match">Add Match</a></li>
				<li><a href="#edit_match">Edit Match</a></li>
			</ul>
			</div>
		</nav>
		
        <div class="row">
		    <h2 class="page_title">EDIT NEWS</h2>
			<form>	  
				<div class="form-group">
					<label for="news_heading">News Heading</label>
					<text class="form-control" rows="1" id="newsheading"></text>
				</div>
				
				<div class="form-group">
					<label for="published_on">Published On</label>
					<text class="form-control" rows="1" id="published_on"></text>
				</div>

				<div class="form-group">
					<label for="description">Description</label>
					<textarea class="form-control" rows="8" id="description"></textarea>
				</div>
			  
				<button type="button" class="btn btn-warning main_action_button">Publish</button>
			</div>			
			</form>
    </main>	
    
    
    <main id="add_team">
			<nav class="nav navbar-default">
		<button id="ChangeToggle" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		<span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
		</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav nav-pills nav-justified">
			<li><a href="#add_news">Add News</a></li>
				<li><a href="#edit_news">Edit News</a></li>
				<li><a href="#add_team" class="tab_active">Add Team</a></li>
				<li><a href="#edit_team">Edit Team</a></li>
				<li><a href="#add_match">Add Match</a></li>
				<li><a href="#edit_match">Edit Match</a></li>
			</ul>
			</div>
		</nav>
		
        <div class="row">
		    <h2 class="page_title">ADD TEAM</h2>
			<form>	  
				<div class="form-group">
					<label for="team_name">Team Name</label>
					<text class="form-control" rows="1" id="team_name"></text>
				</div>
				
				<div class="form-group">
					<label for="team_captain">Team Captain</label>
					<text class="form-control" rows="1" id="team_captain"></text>
				</div>

				<div class="form-group">
					<label for="player_name">Player Name</label>
					<text class="form-control" rows="1" id="player_name"></text>
				</div>
				
				<div class="form-group">
					<label for="player_image">Player Image</label>
					<text class="form-control" rows="1" id="player_image"></text>
				</div>
			  
				<button type="button" class="btn btn-warning main_action_button">Publish</button>
			</div>			
			</form>
    </main>		
    
    
    <main id="edit_team">
		<nav class="nav navbar-default">
		<button id="ChangeToggle" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		<span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
		</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav nav-pills nav-justified">
			<li><a href="#add_news">Add News</a></li>
				<li><a href="#edit_news">Edit News</a></li>
				<li><a href="#add_team">Add Team</a></li>
				<li><a href="#edit_team" class="tab_active">Edit Team</a></li>
				<li><a href="#add_match">Add Match</a></li>
				<li><a href="#edit_match">Edit Match</a></li>
			</ul>
			</div>
		</nav>
				
        <div class="row">
		    <h2 class="page_title">EDIT TEAM</h2>
			<form>	  
				<div class="form-group">
					<label for="team_name">Team Name</label>
					<text class="form-control" rows="1" id="team_name"></text>
				</div>
				
				<div class="form-group">
					<label for="team_captain">Team Captain</label>
					<text class="form-control" rows="1" id="team_captain"></text>
				</div>

				<div class="form-group">
					<label for="player_name">Player Name</label>
					<text class="form-control" rows="1" id="player_name"></text>
				</div>
			  
			   <div class="form-group">
					<label for="player_name">Player Image</label>
					<text class="form-control" rows="1" id="player_name"></text>
				</div>
				
				<button type="button" class="btn btn-warning main_action_button">Publish</button>
			</div>			
			</form>
    </main>	
    
    
    <main id="add_match">
		<nav class="nav navbar-default">
		<button id="ChangeToggle" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		<span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
		</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav nav-pills nav-justified">
			<li><a href="#add_news">Add News</a></li>
				<li><a href="#edit_news">Edit News</a></li>
				<li><a href="#add_team">Add Team</a></li>
				<li><a href="#edit_team">Edit Team</a></li>
				<li><a href="#add_match" class="tab_active">Add Match</a></li>
				<li><a href="#edit_match">Edit Match</a></li>
			</ul>
			</div>
		</nav>
		
        <div class="row">
		    <h2 class="page_title">ADD MATCH</h2>
			<form>	  
				<div class="form-group">
					<label for="team1">Team 1</label>
					<text class="form-control" rows="1" id="team1"></text>
				</div>
				
				<div class="form-group">
					<label for="team2">Team 2</label>
					<text class="form-control" rows="1" id="team2"></text>
				</div>

				<div class="form-group">
					<label for="score">Score</label>
					<text class="form-control" rows="1" id="score"></text>
				</div>
				
				<div class="form-group">
					<label for="time">Time</label>
					<text class="form-control" rows="1" id="time"></text>
				</div>
				
				<div class="form-group">
					<label for="video">Video Link</label>
					<text class="form-control" rows="1" id="video"></text>
				</div>
			  
				<button type="button" class="btn btn-warning main_action_button">Publish</button>
			</div>			
			</form>
    </main>		
    
    
    <main id="edit_match">

	<nav class="nav navbar-default">
		<button id="ChangeToggle" class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
		<span class="icon-bar top-bar"></span>
		<span class="icon-bar middle-bar"></span>
		<span class="icon-bar bottom-bar"></span>
		</button>
			<div class="collapse navbar-collapse navHeaderCollapse">
			<ul class="nav nav-pills nav-justified">
			<li><a href="#add_news">Add News</a></li>
				<li><a href="#edit_news">Edit News</a></li>
				<li><a href="#add_team">Add Team</a></li>
				<li><a href="#edit_team">Edit Team</a></li>
				<li><a href="#add_match">Add Match</a></li>
				<li><a href="#edit_match" class="tab_active">Edit Match</a></li>
			</ul>
			</div>
		</nav>
		
		
        <div class="row">
		    <h2 class="page_title">EDIT MATCH</h2>
			<form>	  
				<div class="form-group">
					<label for="team1">Team 1</label>
					<text class="form-control" rows="1" id="team1"></text>
				</div>
				
				<div class="form-group">
					<label for="team2">Team 2</label>
					<text class="form-control" rows="1" id="team2"></text>
				</div>

				<div class="form-group">
					<label for="score">Score</label>
					<text class="form-control" rows="1" id="score"></text>
				</div>
				
				<div class="form-group">
					<label for="time">Time</label>
					<text class="form-control" rows="1" id="time"></text>
				</div>
				
				<div class="form-group">
					<label for="video">Video Link</label>
					<text class="form-control" rows="1" id="video"></text>
				</div>

                <button type="button" class="btn btn-warning main_action_button">Publish</button>
            </form>
        </div>
        
    </main>	

    <hr id="footer_line">
    <?php include 'includes/footer.php';?>
    
</body>
</html>				