---
{"category_name":"school","problem_code":"LADDU","problem_name":"Laddu","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":"kevinsogo","date_added":"16-04-2016","tags":{"0":"admin2","1":"cakewalk","2":"int","3":"loop","4":"may16"},"editorial_url":"http://discuss.codechef.com/problems/LADDU","time":{"view_start_date":1463391000,"submit_start_date":1463391000,"visible_start_date":1463391000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/mandarin/LADDU.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/russian/LADDU.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY16/vietnamese/LADDU.pdf">Vietnamese</a> as well.</h3>
<p>
You might have heard about our new goodie distribution program aka the "<a href="https://www.codechef.com/laddu">Laddu Accrual System</a>". This problem is designed to give you a glimpse of its rules. You can read the page once before attempting the problem if you wish, nonetheless we will be providing all the information needed here itself.
</p>
<p>
Laddu Accrual System is our new goodie distribution program. In this program, we will be distributing Laddus in place of goodies for your winnings and various other activities (described below), that you perform on our system. Once you collect enough number of Laddus, you can then redeem them to get yourself anything from a wide range of CodeChef goodies.
</p>
<p>
Let us know about various activities and amount of laddus you get corresponding to them.</p>
<ul>
<li>Contest Win (CodeChef’s Long, Cook-Off, LTIME, or any contest hosted with us) : 300 + Bonus (Bonus = 20 - contest rank). Note that if your rank is > 20, then you won't get any bonus.</li>
<li>Top Contributor on <a href="http://discuss.codechef.com">Discuss</a> : 300</li>
<li>Bug Finder	: 50 - 1000 (depending on the bug severity). It may also fetch you a CodeChef internship! </li>
<li>Contest Hosting	 : 50 </li>
</ul>

<p>
You can do a checkout for redeeming laddus once a month. The minimum laddus redeemable at Check Out are 200 for Indians and 400 for the rest of the world.
</p>
<p>
You are given history of various activities of a user. The user has not redeemed any of the its laddus accrued.. Now the user just wants to redeem as less amount of laddus he/she can, so that the laddus can last for as long as possible. Find out for how many maximum number of months he can redeem the laddus.
</p>
<h3>Input</h3>
<ul>
<li>The first line of input contains a single integer <b>T</b> denoting number of test cases</li>
<li>For each test case:
<ul>
<li>First line contains an integer followed by a string denoting <b>activities, origin</b> respectively, where <b>activities</b> denotes number of activities of the user, <b>origin</b> denotes whether the user is Indian or the rest of the world. <b>origin</b> can be "INDIAN" or "NON_INDIAN".</li>
<li>For each of the next <b>activities</b> lines, each line contains an activity. <br />
			An activity can be of four types as defined above. 
<ul>
<li>Contest Win : Input will be of form of <b>CONTEST_WON rank</b>, where <b>rank</b> denotes the rank of the user. </li>
<li>Top Contributor : Input will be of form of <b>TOP_CONTRIBUTOR</b>.</li>
<li>Bug Finder : Input will be of form of <b>BUG_FOUND severity</b>, where <b>severity</b> denotes the severity of the bug. </li>
<li>Contest Hosting : Input will be of form of <b>CONTEST_HOSTED</b>.</li>
</ul>
</li>
</ul>
</li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, find out the maximum number of months for which the user can redeem the laddus accrued.
</li></ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T, activities</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>rank</b> ≤ <b>5000</b></li>
<li><b>50</b> ≤ <b>severity</b> ≤ <b>1000</b></li>
</ul>
<h3>Subtasks</h3>
<p>There is only a single subtask with 100 points.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
4 INDIAN
CONTEST_WON 1
TOP_CONTRIBUTOR
BUG_FOUND 100
CONTEST_HOSTED
4 NON_INDIAN
CONTEST_WON 1
TOP_CONTRIBUTOR
BUG_FOUND 100
CONTEST_HOSTED

<b>Output:</b>
3
1
</pre><h3>Explanation</h3>
<p><b>In the first example</b>, </p>
<ul>
<li>For winning contest with rank 1, user gets 300 + 20 - 1 = 319 laddus. </li>
<li>For top contributor, user gets 300 laddus. </li>
<li>For finding a bug with severity of 100, user gets 100 laddus. </li>
<li>For hosting a contest, user gets 50 laddus. </li>
</ul>

<p>
So, overall user gets 319 + 300 + 100 + 50 = 769 laddus.<br />
Now, the user is an Indian user, he can redeem only 200 laddus per month. So, for first three months, he will redeem 200 * 3 = 600 laddus. The remaining 169 laddus, he can not redeem as he requires at least 200 laddues in a month to redeem. </p>
<p>So, answer is 3.
</p>
<p><b>In the second example</b>, user is a non-Indian user, he can redeem 400 laddues per month. So, in the first month, he will redeem 400 laddus. The remaining 369 laddus, he can not redeem as he requires at least 400 laddues in a month to redeem. </p>
<p>So, answer is 1.
</p>
