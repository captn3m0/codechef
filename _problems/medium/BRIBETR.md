---
{"category_name":"medium","problem_code":"BRIBETR","problem_name":"Bear and Bribing Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"errichto","problem_tester":"errichto","date_added":"23-02-2017","tags":{"0":"dynamic","1":"errichto","2":"ltime45","3":"medium","4":"two"},"editorial_url":"https://discuss.codechef.com/problems/BRIBETR","time":{"view_start_date":1488042300,"submit_start_date":1488042300,"visible_start_date":1488042300,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/mandarin/BRIBETR.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/russian/BRIBETR.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME45/vietnamese/BRIBETR.pdf">Vietnamese</a> as well.</h3>

<p>Limak is a big grizzly bear who loves wrestling.
He is going to participate in a coming tournament.</p>

<p>There will be N = 2<b><sup>H</sup></b> bears participating in the tournament.
Bears are numbered 1 through N and Limak has index 1.
Each bear has a unique value <b>x</b><sub>i</sub> representing his or her strength.
The tournament is divided into <b>H</b> stages.
In each stage bears are divided into pairs according to their indices (more info in the next paragraph).
In each pair, the two bears fight with each other and one of them wins (there are no draws).
The loser is eliminated, while the winner advances to the next stage.</p>

<p>In each stage, the remaining bears are sorted by their initial index.
Then, the first two bears are in one pair, next two are in the second pair, and so on.
So in the first stage there are N/2 matches: one between bear 1 and bear 2, one between bear 3 and bear 4, and so on (the last match between bear N-1 and bear N).
In the second stage, the winner of the fight between bear 1 and bear 2, will fight against the winner of the fight between bear 3 and bear 4, and so on.</p>

<p>Usually, when two bears fight with each other, the one with greater strength wins.
But grizzly bears aren't always honest and fair.
In each match (no matter if he fights in it or not), Limak can bribe the referee and change the winner of this match.
To avoid suspicion, he can do it only if the difference between strengths of the two bears doesn't exceed <b>K</b>.</p>

<p>For example, let's say that <b>K</b> = 10.
If two bears with strength 70 and 85 fight with each other, the one with strength 85 must win.
But if their strengths are 70 and 78 (or e.g. 70 and 80), Limak can bribe the referee and then the bear with strength 70 wins — but obviously Limak doesn't have to bribe the referee and then the bear with greater strength automatically wins.</p>

<p>What is the minimum number of times Limak has to bribe a referee, if he wants to win the tournament?
Output -1 if he can't win.</p>



<h3>Input</h3>

<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.
The description of <b>T</b> test cases follows.</p>

<p>The first line of each test case contains two integers <b>H</b> and <b>K</b> denoting the number of stages and the maximum allowed difference of strengths between bears for Limak to bribe the referee.
Note that N = 2<sup><b>H</b></sup>.</p>

<p>The second line of a test case contains N distinct integers: <b>x</b><sub>1</sub>, <b>x</b><sub>2</sub>, ..., <b>x</b><sub>N</sub>, where <b>x</b><sub>i</sub> denotes the strength of the i-th bear.
Limak has index 1 so his strength is <b>x</b><sub>1</sub>.





<h3>Output</h3>

<p>For each test case, output a single line containing one integer — the minimum number of times Limak has to bribe a referee.
If he can't win the tournament, output -1 instead.</p>



<h3>Constraints</h3>

<ul>
<li>1 ≤ <b>T</b> ≤ 3</li>
<li>2 ≤ <b>H</b> ≤ 17</li>
<li>1 ≤ <b>K</b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>x</b><sub>i</sub> ≤ 10<sup>9</sup></li>
<li><b>x</b><sub>i</sub> ≠ <b>x</b><sub>j</sub> for i ≠ j
</ul>



<h3>Subtasks</h3>

<ul>
<li>Subtask #1 (25 points) 2 ≤ <b>H</b> ≤ 10</li>
<li>Subtask #2 (20 points) <b>K</b> = 10<sup>9</sup></li>
<li>Subtask #3 (55 points) Original constraints</li>
</ul>



<h3>Example</h3>

<pre><b>Input:</b>
3
2 10
70 78 67 75
3 10
18 2 19 21 33 40 26 25
2 7
4 9 8 16

<b>Output:</b>
2
4
-1</pre>



<h3>Explanation</h3>

<p><b>Test case 1.</b> We are given <b>H</b> = 2 so there are N = 4 bears in the tournament.
Limak has strength 70 and he first fights against a bear with strength 78.
Limak must bribe this referee because he would lose otherwise.
In the other match of the first stage, bears with strengths 67 and 75 fight with each other.
Limak can bribe the referee of that match too, so that the bear with strength 67 advances to the next stage, where Limak beats him without bribing the referee (because Limak's strength is greater).
The answer is 2 because Limak changes results of 2 matches, and you can verify that this is the minimum.</p>

<p>One other optimal strategy is to allow the bear with strength 75 to win his first match.
Then Limak fights with that bear in the second stage and he can bribe the referee to win.</p>

<p><b>Test case 2.</b> Limak must bribe at least 4 referees.
The binary tree below shows how the tournament can look like.
Each vertex with two children denotes one match (winner moves to the parent).
Red vertices denote matches where Limak bribes the referee.</p>

<object data="https://codechef_shared.s3.amazonaws.com/download/upload/LTIME45/9qhYjlA.png" type="image/svg+xml" height="190" width="320">
</object>

<p><b>Test case 3.</b> Limak can bribe the referee to win his first match (against the bear with strength 9) but he will lose the next match against the bear with strength 16 (who must win his first match) because the difference between their strength 16 - 4 = 12 is greater than <b>K</b>.</p>