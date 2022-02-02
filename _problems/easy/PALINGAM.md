---
{"category_name":"easy","problem_code":"PALINGAM","problem_name":"Palindromic Game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"kotlin","24":"LISP clisp","25":"LISP sbcl","26":"LUA","27":"NEM","28":"NICE","29":"NODEJS","30":"PAS fpc","31":"PAS gpc","32":"PERL","33":"PERL6","34":"PHP","35":"PIKE","36":"PRLG","37":"PYPY","38":"PYTH","39":"PYTH 3.5","40":"RUBY","41":"rust","42":"SCALA","43":"SCM chicken","44":"SCM guile","45":"SCM qobi","46":"ST","47":"swift","48":"TCL","49":"TEXT","50":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"31-07-2017","tags":{"0":"ad","1":"admin2","2":"aug17","3":"easy","4":"game"},"editorial_url":"https://discuss.codechef.com/problems/PALINGAM","time":{"view_start_date":1503048600,"submit_start_date":1503048600,"visible_start_date":1503048600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/mandarin/PALINGAM.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/russian/PALINGAM.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/AUG17/vietnamese/PALINGAM.pdf">vietnamese</a> as well.</h3>

<p>There are two players A, B playing a game. Player A has a string <b>s</b> with him, and player B has string <b>t</b> with him. Both <b>s</b> and <b>t</b> consist only of lower case English letters and are of equal length. A makes the first move, then B, then A, and so on alternatively. Before the start of the game, the players know the content of both the strings <b>s</b> and <b>t</b>.</p>

<p>These players are building one other string w during the game. Initially, the string w is empty. In each move, a player removes any one character from their respective string and adds this character anywhere (at any position) in the string w (Note that w is a string at all times, and you can insert between characters or at the ends. It is not an empty array where you can add a character at any index. Please see the Explanations for further clarification). If at any stage of the game, the string w is of length greater than 1 and is a palindrome, then the player who made the last move wins. </p>

<p>If even after the game finishes (ie. when both <b>s</b> and <b>t</b> have become empty strings), no one is able to make the string w a palindrome, then player B wins.</p>

<p>Given the strings <b>s</b>, and <b>t</b>, find out which of A, B will win the game, if both play optimally.</p>

<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b>, corresponding to the number of test cases. The description of each testcase follows.</li>
<li>The first line of each testcase will contain the string <b>s</b>.</li>
<li>The second line of each testcase will contain the string <b>t</b>.</li>
</ul>

<h3>Output</h3>
<p>For each test case, output "A" or "B" (without quotes) corresponding to the situation, in a new line.</p>

<h3>Constraints</h3>
<ul>
<li><b>Subtask 1</b> (20 points) : 1 ≤ <b>T</b> ≤ 500, All characters of string <b>s</b> are equal, All characters of string <b>t</b> are equal. 1 ≤ <b>|s| = |t|</b> ≤ 500</li>
<li><b>Subtask 2</b> (80 points) : 1 ≤ <b>T</b> ≤ 500, 1 ≤ <b>|s| = |t|</b> ≤ 500 </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
3
ab
ab
aba
cde
ab
cd
<b>Output:</b>
B
A
B
</pre>

<h3>Explanation</h3>
<p><b>Testcase 1</b>: If A adds 'a' to w in the first move, B can add 'a' and make the string w = "aa", which is a palindrome, and hence win. Similarly, you can show that no matter what A plays, B can win. Hence the answer is B.</p>

<p><b>Testcase 2</b>: Player A moves with 'a', player B can put any of the character 'c', 'd' or 'e', Now Player A can create a palindrome by adding 'a'.</p>

<p><b>Testcase 3</b>: None of the players will be able to make a palindrome of length > 1. So B will win.</p>
