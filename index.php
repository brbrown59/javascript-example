<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="javascript.js"></script>
	</head>
	<body>
		<h1>Fun with Javascript!!!</h1>

		<h2>Paragraph 1</h2>
		<p id="color" onmouseover="mouseOver();" onmouseout="mouseOut();">Capt. Malcolm Reynolds: [about protective goggles] Fine, I'll wear 'em. But I'll look like an idiot. Zo : I should think you'd be used to that, sir. Jayne Cobb: Shepherd Book once said to me, "If you can't do something smart, do something right." Capt. Malcolm Reynolds: We're going to need paint. We're going to need red paint. Jayne Cobb: [as Mal's talking to the Vault Guard] MAL! Capt. Malcolm Reynolds: Every heist he's gotta start yellin' my name! Dr. Simon Tam: [deciding to leave the ship] River, do you want to stay with them? River Tam: It isn't safe. Dr. Simon Tam: No. I fear it isn't safe any more. [walks away] River Tam: [quietly] For them.
		</p>
		<p>Hover over to change text color</p>

		<h2>Paragraph 2</h2>
		<p id="toreplace">[seeing a whole fleet of Reaver ships coming at him]  The Operative: Target the Reavers. Target the Reavers! Target everyone! Somebody fire!
			Fanty: Do you know that girl?  Capt. Malcolm Reynolds: I really don't.
			Dr. Simon Tam: But I think when they triggered you, it somehow brought this up. This memory.  River Tam: It isn't mine. The memory, it isn't mine. And I shouldn't have to carry it. It isn't mine. Don't make me sleep again.  Dr. Simon Tam: I won't. I won't.  River Tam: Put a bullet to me. Bullet in the brain pan. Squish.  Dr. Simon Tam: Don't say that! Not ever. We'll get through this.  River Tam: Things are going to get much, much worse.
			The Operative: Where are you hiding, little girl?
			The Operative: Secrets are not my concern. Keeping them is.
		</p>
		<label for="find">Text to find:</label>
		<input type="text" id="find" value="This"/>
		<label for="replace">Replace with:</label>
		<input type="text" id="replace" value="New"/><br/><br/>
		<input type="button" id="startfind" value="Find/Replace" onclick="findReplace();"/>

		<h2>Paragraph 3</h2>
		<p id="font">[after the hovercraft makes a crash landing in the hanger of Serenity. Simon runs to his sister]  Dr. Simon Tam: River?  River Tam: I swallowed a bug.
			Capt. Malcolm Reynolds: So I'm noticing. Is there a problem we don't know of?  [pause]  Capt. Malcolm Reynolds: You got a sweet take kissing your foot. How about you take your 25% and we can talk about the next job?  Fanty: Well our end is forty, precious.  Jayne Cobb: My muscular buttocks it's forty.
			Capt. Malcolm Reynolds: It should have been me that got hit.  Shepherd Book: The thought... had crossed my mind.
			Zo : Do you really think any of us is gonna get through this?  [looks at the other crew members struggling with their guns]  Jayne Cobb: Well, I might.
			The Operative: Where are you hiding, little girl?
		</p>
		<input type="button" id="changefont" value="Change Font?" onclick="changeFont();"/>

		<h2>Paragraph 4</h2>
		<p id="toreverse"> Capt. Malcolm Reynolds: [after landing on Miranda] Well, something sure the hell ain't right.
			Hoban 'Wash' Washburn: It's okay, I'm a leaf on the wind!  Capt. Malcolm Reynolds: What does that mean?
			Capt. Malcolm Reynolds: So I'm noticing. Is there a problem we don't know of?  [pause]  Capt. Malcolm Reynolds: You got a sweet take kissing your foot. How about you take your 25% and we can talk about the next job?  Fanty: Well our end is forty, precious.  Jayne Cobb: My muscular buttocks it's forty.
			Hoban 'Wash' Washburn: This landing is gonna get pretty interesting.  Capt. Malcolm Reynolds: Define "interesting".  Hoban 'Wash' Washburn: [deadpan] Oh God, oh God, we're all going to die?
			Capt. Malcolm Reynolds: What in the hell happened back there?  Hoban 'Wash' Washburn: Start with the part where Jayne gets knocked out by a 90-pound girl 'cause... I don't think that's ever getting old.
		</p>
		<input type="button" id="startreverse" value="Reverse!" onclick="reverseText();"/>

		<h2>Paragraph 5</h2>
		<p id="toanagram"> Capt. Malcolm Reynolds: They take you down, I don't expect to grieve overmuch. Like to kill you myself, I see you again.  The Operative: You won't...  [small, grim smile]  The Operative: There is nothing left to see.
			[Deleted scene]  The Operative: Serenity... you lost everything in that battle. Everything you had, everything you were. How did you go on?  Capt. Malcolm Reynolds: If you're still standing there when that engine starts, you never will figure it out.
			Capt. Malcolm Reynolds: Just get us on the ground!  Hoban 'Wash' Washburn: That part'll happen pretty definitely.
			The Operative: Do you know what your sin is Mal?  Capt. Malcolm Reynolds: Ah Hell... I'm a fan of all seven. But right now... I'm gonna have to go with wrath.
			River Tam: [seeing visions of dead bodies on Miranda] Run-tse duh shang-dee, ching dai-wuhtzo... make them stop! They're everywhere. Every city, every... every house, every room; they're all inside me! I can hear them all and they're saying... NOTHING! GET UP! Please, get up! Wuo-shang mayer, maysheen byen shr-to. Please God, make me a stone.
		</p>
		<input type="button" id="startanagram" value="Anagram!" onclick="anagramText();"/>
	</body>
</html>