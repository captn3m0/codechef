---
{"category_name":"easy","problem_code":"KIRLAB","problem_name":"Kirito in labyrinth","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"maestr0","problem_tester":"kevinsogo","date_added":"2-11-2016","tags":{"0":"maestr0"},"time":{"view_start_date":1481535000,"submit_start_date":1481535000,"visible_start_date":1481535000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/mandarin/KIRLAB.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/russian/KIRLAB.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC16/vietnamese/KIRLAB.pdf">Vietnamese</a> as well.</h3>

<p>Kirito faced a dangerous labyrinth, and now he requires your help.</p>

<p>He's in a tunnel which contains <b>N</b> different rooms. Each room contains <b>A<sub>i</sub></b> monsters inside it. He starts from room <b>1</b>. Every time he stays near a room <b>X</b>, he may go in and clear it from monsters, or just leave the room locked and move to the room <b>X+1</b>. However, if he clears a room with <b>K</b> monsters, and the next room he clears consists of <b>L</b> monsters, then the greatest common divisor of <b>K</b> and <b>L</b> must be greater than <b>1</b>, otherwise he will die (awful curse). Formally, let us say that the order of rooms he visited is <b>i<sub>1</sub></b>,  <b>i<sub>2</sub></b>, , ..., <b>i<sub>t</sub></b>. Then gcd(<b>A<sub>i<sub>j</sub></sub></b>, <b>A<sub>i<sub>j + 1</sub></sub></b>) <b>> 1</b> for all <b>j < t</b>. Help him cross all the rooms by clearing the maximum number of rooms.</p>

<h3>Input</h3>
<p>The first line of input contains an integer <b>T</b> denoting the number of test cases.</p>
<p>The first line of each test case contains one integer <b>N</b> denoting the number elements in sequence.</p>
<p>The second line of each test case contains <b>N</b> integers where <b>i-th</b> integer is number of monsters in room <b>A<sub>i</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output the maximum number of rooms he could clear. (Kirito should survive.)</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>a<sub>i</sub></b> ≤ <b>10<sup>7</sup></b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li><b>Subtask 1:</b> <b>1</b> ≤ <b>N</b> ≤ <b>10<sup>3</sup></b> - <b>30 points</b></li>
<li><b>Subtask 2:</b> <b>Original constraints</b> - <b>70 points</b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
7
13 2 8 6 3 1 9
6
1 2 2 3 3 1</tt>
<b>Output:</b>
<tt>5
2</tt>
</pre>

<h3>Explanation</h3>
<p><b>Example 1</b>. Kirito can clear the monsters in the rooms 2, 3, 4, 5, 7 in that order. These rooms consist of 2, 8, 6, 3, and 9 monsters, respectively. You can check that gcd(2, 8), gcd(8, 6), gcd(6, 3) and gcd(3, 9), all are greater than 1.</p>
<p><b>Example 2</b>. Kirito can clear the monsters in the rooms numbered 2, 3. Each of these two rooms contains two monsters. And we know that gcd(2, 2) = 2 > 1.</p>
<p>There is one more possible solution: Kirito can clear the monsters in the rooms numbered 4, 5. These rooms contains 3 monsters each, and he can clear these rooms as gcd(3, 3) = 3 > 1.</p>