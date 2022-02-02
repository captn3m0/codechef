---
{"category_name":"school","problem_code":"FRK","problem_name":"Chef and Friends","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mgch","problem_tester":"lg5293","date_added":"27-03-2018","tags":{"0":"easy","1":"ltime58","2":"mgch","3":"string"},"time":{"view_start_date":1522602000,"submit_start_date":1522602000,"visible_start_date":1522602000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/mandarin/FRK.pdf">Mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/russian/FRK.pdf">Russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME58/vietnamese/FRK.pdf">Vietnamese</a> as well.</h3>

<p>
Chef decided to find the connections with all of his friends in an unnamed social network. He calls a user of the social network his <i>friend</i> if there is a common substring of the string "chef" and the nickname of that user with length ≥ 2.
</p>

<p>
Given a list of users of the social network, compute the number of Chef's friends.
</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains a single integer <b>N</b> denoting the number of users in the social network.</li>
<li><b>N</b> lines follow. Each of these lines contains a single string <b>u</b> denoting the nickname of one user.</li>
</ul>

<h3>Output</h3>
<p>Print a single line containing one integer — the number of Chef's friends.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 5,000</li>
<li>3 ≤ <b>|u|</b> ≤ 20</li>
<li>each character of each user's nickname is either a lowercase English letter ('a'-'z') or '.'</li>
<li>the first character of each user's nickname is a lowercase English letter</li>
</ul>

<h3>Subtasks</h3>

<p>
<b>Subtask #1 (100 points):</b> original constraints
</p>

<h3>Example</h3>
<pre><b>Input:</b>

4
gennady.korotkevich
kefaa
fhlasek
chemthan

<b>Output:</b>

3
</pre>

<h3>Explanation</h3>
<ul>
<li>gennady.korotkevich is a friend to Chef because he has "ch" at the end of his nickname, which is also a substring of "chef" with length 2</lI>
<li>the common substring with kefaa is "ef" and the common substring with chemthan is "che"</li>
