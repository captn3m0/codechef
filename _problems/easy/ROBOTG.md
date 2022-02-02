---
{"category_name":"easy","problem_code":"ROBOTG","problem_name":"Safe Robot","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lg5293","problem_tester":"errichto","date_added":"14-03-2017","tags":{"0":"bruteforce","1":"cook80","2":"easy","3":"lg5293","4":"string"},"editorial_url":"https://discuss.codechef.com/problems/ROBOTG","time":{"view_start_date":1489949100,"submit_start_date":1489949100,"visible_start_date":1489949100,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/mandarin/ROBOTG.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/russian/ROBOTG.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK80/vietnamese/ROBOTG.pdf">Vietnamese</a> as well.</h3>

<p>
There is a rectangular grid of cells consisting of <b>n</b> rows and <b>m</b> columns.
You will place a robot on one of the grid cells and provide it with a <i>command string</i> <b>s</b>, consisting of characters ‘L’, ‘R’, ‘U’, ‘D’.
After being placed, the robot will follow the instructions of the command string, where 'L' corresponds moving to the left, 'R' towards the right, 'U' for moving up, and 'D' means down.
</p>

<p>
You have already selected the command string <b>s</b>, and are wondering if it is possible to place the robot in one of the grid cells initially and have it always stay entirely within the grid upon execution of the command string <b>s</b>.
Output “safe” if there is a starting cell for which the robot doesn’t fall off the grid on following command <b>s</b>, otherwise, output "unsafe".
</p>

<h3>Input</h3>
<p>
The first line of input will contain an integer <b>T</b>, the number of test cases.
</p>

<p>
Each test case will be on two lines. 
</p>
<p>
The first line will have two space separated integers <b>n,m</b>. 
</p>
<p>
The second line will have the command string <b>s</b>.
</p>

<h3>Output</h3>
<p>
For each test case, output "safe" (without quotes) or "unsafe" (without quotes) in a new line.
</p>

<h3>Constraints</h3>
<ul>
<li> 1 ≤ <b>T</b> ≤ 1,000</li>
<li> 1 ≤ <b>n,m</b> ≤ 10</li>
<li> 1 ≤ <b>|s|</b> ≤ 10</li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
5
1 1
R
2 3
LLRU
3 2
LLRU
4 3
ULURUDRDLD
3 6
RURUR

<b>Output:</b>
unsafe
safe
unsafe
safe
safe
</pre>

<h3>Explanation</h3>
<p>
For the first case, there is only one grid square, so we must place our robot there. When the robot follows the command, it'll fall off, so it is unsafe.
</p>

<p>
For the second case, we can place the robot on the bottom right grid square. Here is an image denoting the moves that the robot will make.

<img src="https://snag.gy/l4krZU.jpg"></img>
</p>