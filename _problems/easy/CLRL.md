---
{"category_name":"easy","problem_code":"CLRL","problem_name":"Chef goes Left Right Left","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"CAML","6":"CLOJ","7":"CLPS","8":"COB","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"abizerl123","problem_tester":null,"date_added":"20-10-2017","tags":{"0":"abizerl123","1":"cakewalk","2":"nov17"},"time":{"view_start_date":1510579800,"submit_start_date":1510579800,"visible_start_date":1510579800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/mandarin/CLRL.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/russian/CLRL.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/NOV17/vietnamese/CLRL.pdf">Vietnamese</a> as well.</h3>


<p>Chef is at a Code Expo where many coders are present discussing, solving, sharing, and eavesdropping on solutions :P</p>
<p>
He recently learnt that a former HackerPlant employee, Reziba, who is now working at KodeKarma stole some questions for their KoolKontest. Chef wants to find Reziba, but the only data he has on him, and everyone else present, are their CodeXP ratings, which are distinct.</p>
<p>Chef decides to find Reziba through his rating by asking different people present at the expo. Everyone present are arranged in such a way that, assuming a person with rating X, every person with a rating higher than X are on the person's right, while every person with a rating lower than X are on the person's left.</p>
<p>
Everyone present there knows Reziba's rating, except Chef, who now asks people where he could find Reziba.</p>

<p>

Chef initially asks an arbitrary person, who replies by giving information on whether Reziba is to the person's left or the person's right, depending on whether this person has a higher or lower rating than Reziba.<br>
Chef proceeds in that direction for an arbitrary distance and stops and asks the next person encountered, and repeats this procedure.<br> However, Chef will never go beyond a person whose rating Chef has asked before. For example, if Chef was walking to the left and finds a person who already told him to walk to the right then he will not continue going to the person's left. <br>Chef finally finds Reziba when he finally stops in front of Reziba.</p>

<p>During Chef's search for Reziba, he wrote the sequence of ratings of the people Chef asked in the exact same order, including Reziba's rating, which is the last integer in the sequence.<br>Towards the end, Chef feels he might've made a mistake while writing this sequence.
</p>

<p>Given the sequence that Chef wrote and Reziba's rating, find out whether this sequence is possible or has mistakes.</p>

<p> </p>


<h3>Input</h3>
<p>
</p>
<ul>
<li>First line contains number of test cases <b>T</b>.</li>
<li>The first line of each test case contains the number of people Chef meets, <b>N</b> and Reziba's rating <b>R</b> seperated by a space.</li>
<li>Second line of each test case contains <b>N</b> number of space separated ratings from <b>A<sub>1</sub></b> to <b>A<sub>N</sub></b> where <b>A<sub>N</sub></b> is always equal to <b>R</b>.</li>
</ul>
<p> </p>

<h3>Output</h3>
<p></p>
<ul>
<li>For each test case, output a singe line with either  "YES" if the sequence is correct, or print "NO" if the sequence has mistakes, without quotes.
</li>
</ul>
<p> </p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>6</sup></b></li>
<li><b>1</b> ≤ sum of <b>N</b> in all test-cases ≤ <b>1.5*10<sup>6</sup></b></li>
<li><b>1</b> ≤ <b>A<sub>i</sub></b> ≤ <b>10<sup>9</sup></b></li>
<li>Integers in <b>A</b> are distinct</li>
<li><b>A<sub>N</sub></b> = R</li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<ul>
<li><b>Subtask #1</b>: N ≤ 20</li>
<li><b>Subtask #2</b>: Original Constraints</li></ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 200
600 300 100 350 200
5 890
5123 3300 783 1111 890
<p></p>
<b>Output:</b>
NO
YES
</pre>
<p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b>The first person that Chef asked has a rating of 600, which is more than 200 so he tells Chef to go to his left. The second person Chef meets has a rating of 300, also tells Chef to go to the left. The third person that chef asked has a rating of 100 so he tells Chef to go to the right. Then Chef asked a person with rating 350, that means Chef went beyond the person with rating of 300, which should never happen, so Chef must have made a mistake while writing this sequence.</p>