---
{"category_name":"hard","problem_code":"BOUNCE","problem_name":"Advanced Cooking Machine","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":7,"source_sizelimit":50000,"problem_author":"kevinsogo","problem_tester":null,"date_added":"21-11-2016","tags":{"0":"kevinsogo"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/BOUNCE.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/BOUNCE.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/BOUNCE.pdf">Vietnamese</a> as well.</h3>

<p>The most advanced cooking machine is in town! It's called the <b>Advanced Cooking Machine</b>, or <b>ACM</b>. The company that sells them is the <b>ICPC</b>. (You can come up with an acronym yourself.)</p>

<p>Each ACM is rectangular in shape (when viewed from the top) with integer dimensions. No ACM is square-shaped.</p>

<p>The ACM is quite unique in its cooking method. When it starts, a magical beam of "cooking laser" is fired from the bottom-left corner at an angle of 45 degrees from the side. The laser beam passes through food completely and cooks them. However, when the beam hits one of the sides, it bounces in such a way that the angle remains 45 degrees. See the following image for an illustration:</p>

<img src="https://codechef_shared.s3.amazonaws.com/download/upload/bounce.png" height="180"/>

<p>The cooking ends when the beam hits any of the corners, in which case it is absorbed by the machine.</p>

<p>In addition, the four sides of an ACM are fitted with detectors, one for each side. These are used to keep track of the ACM's cooking performance. As the beam hits a side, the corresponding detector activates and then prints a single letter to the ACM's display. The top, left, bottom and right detectors output <tt>T</tt>, <tt>L</tt>, <tt>D</tt> and <tt>R</tt> respectively. Thus, when the cooking ends, a string of letters <tt>TLDR</tt> will be printed on the screen. For example, the ACM in the image above prints the string <tt>RLTRL</tt>.</p>

<p>Naturally, this string will always be the same for a particular ACM; in other words it is only dependent on the dimensions <b>R × C</b>. Let's call this string the <b>signature string</b> of the ACM, and denote it as <b>f(R, C)</b>.</p>

<p>And since a longer signature string means more thorough cooking, the ICPC has decided to set the price of an ACM to be the length of the signature string, in dollars! In other words, the cost of the <b>R × C</b> ACM is <b>|f(R, C)|</b> dollars.</p>

<p>Chef, in keeping up with the times, has bought an ACM with dimensions <b>R × C</b>. Chef loved the ACM very much! Unfortunately, he loved it too much, that the ACM broke due to overuse. This made Chef very upset, and so he's seeking a replacement.</p>

<p>Chef wants an exact replica of his ACM, but he doesn't remember <b>R × C</b>! All he remembers are the following:</p>

<ol>
<li><b>1 ≤ R ≤ N</b> and <b>1 ≤ C ≤ N</b>.</li>
<li><b>f(R, C)</b> starts with the string <b>S</b>.</li>
</ol>

<p>Chef will do anything just to get his original ACM back, even if it means spending more than necessary. He decided to buy all ACMs whose dimensions <b>R × C</b> satisfy the above. Your problem is now to compute Chef's total spendings, i.e., find the total cost of all distinct ACMs satisfying the two requirements above.</p>

<p><em>Note:</em> Two ACMs with the same dimensions are identical, but ACMs cannot be rotated, i.e., <b>R × C</b> is different from <b>C × R</b>.</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains two integer <b>N</b> and <b>|S|</b> separated by a space.</p>
<p>The second line contains the string <b>S</b>.</p>


<h3>Output</h3>
<p>For each test case, output a single line containing the answer. Since the answer can be very large, only output it modulo <b>10<sup>9</sup> + 7</b>.</p>


<h3>Constraints</h3>

<ul>
<li><b>1 ≤ |S| ≤ 10<sup>6</sup></b></li>
<li>The sum of the <b>|S|</b> in a single file is <b> ≤ 10<sup>6</sup></b></li>
<li><b>S</b> is a string consisting of the letters <tt>TLDR</tt>.</li>
</ul>

<h3>Subtasks</h3>
<b>Subtask #1 (10 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>500</b></li>
<li><b>4</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1 ≤ |S| ≤ 10<sup>3</sup></b></li>
</ul> 
<p></p>
<b>Subtask #2 (25 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>200</b></li>
<li><b>4</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul> 
<p></p>
<b>Subtask #3 (65 points):</b>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>4</b> ≤ <b>N</b> ≤ <b>10<sup>10</sup></b></li>
</ul> 
<p></p>


<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
5 4
RLTR
4 4
RLTR</tt>
<b>Output:</b>
<tt>5
0</tt>
</pre>

<h3>Explanation</h3>
<p>In the first test case, there is only one ACM satisfying the requirements, and that is the ACM with dimensions <b>5 × 2</b>. <b>f(5,2)</b> = <tt>RLTRL</tt> has length <b>5</b>, so the total cost is <b>5</b>.</p>
<p>In the second test case, no ACMs satisfy the requirements, so the total cost is <b>0</b>.</p>

