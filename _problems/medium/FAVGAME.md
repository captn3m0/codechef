---
{"category_name":"medium","problem_code":"FAVGAME","problem_name":"Completing favorite game","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"xcwgf666","date_added":"26-08-2016","tags":{"0":"alex_2oo8","1":"dfs","2":"dp","3":"dynamic","4":"march17","5":"medium","6":"tree"},"editorial_url":"https://discuss.codechef.com/problems/FAVGAME","time":{"view_start_date":1489397400,"submit_start_date":1489397400,"visible_start_date":1489397400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/mandarin/FAVGAME.pdf?v=1">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/russian/FAVGAME.pdf?v=1">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH17/vietnamese/FAVGAME.pdf?v=1">Vietnamese</a> as well.</h3>

<p>Chef has a nice job. Actually he doesn't even remember what he is supposed to do there, because he just plays video-games all the time, exactly <b>h</b> hours every working day!</p>

<p>Recently he got bored of just randomly playing video-games and decided to complete all the levels of his favorite Game as fast as possible.</p>

<p>The Game consists of <b>n</b> levels numbered with integers from <b>1</b> to <b>n</b>. After completing every level, some <b>small</b> number of new levels is unlocked. The structure of the Game levels is a tree with the root in level <b>1</b>, i.e. every level (except for <b>1</b>) has a unique level that unlocks it and level <b>1</b> is the only level that is considered unlocked at the very beginning. Chef has completed his favorite Game lots of times, so he knows that he needs exactly <b>t<sub>i</sub></b> hours to complete level <b>i</b>. Due to specifics of the Game every level should be completed entirely within one working day, i.e. Chef <b>cannot</b> start a level on Thursday, and finish it Friday morning.</p>

<p>Overall the game-play proceeds as follows:</p>
<ol>
    <li>There is a stack <b>S</b> that initially contains only the level <b>1</b></li>
    <li>Chef pops the topmost level out of the stack. Let's call this level <b>x</b></li>
    <li>Chef spends <b>t<sub>x</sub></b> hours to complete level <b>x</b>. Note that he doesn't want to stay at work longer than for <b>h</b> hours, so if there is not enough time left today Chef will complete level <b>x</b> the next working day morning.</li>
    <li>After completing level <b>x</b> some <b>m<sub>x</sub></b> new levels get unlocked</li>
    <li>Chef places all the <b>m<sub>x</sub></b> unlocked levels on the top of the stack <b>S</b> in an arbitrary order, i.e. he is free to choose any order he likes</li>
    <li>If stack <b>S</b> is empty, the Game is considered completed, otherwise Chef goes back to the step <b>2</b></li>
</ol>

<p>Can you help Chef figure out the minimum number of working days necessary to complete the Game?</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </p>

<p>For each test case, the first line of input contains two integers <b>n</b> and <b>h</b>. </p>

<p>The next line contains <b>n</b> space-separated integers ― <b>t<sub>1</sub></b>, <b>t<sub>2</sub></b>, <b>...</b>, <b>t<sub>n</sub></b>.</p>

<p>The following <b>n</b> lines describe the structure of Game's levels: the <b>x</b>-th of them contains an integer <b>m<sub>x</sub></b> followed by <b>m<sub>x</sub></b> integers ― the levels that get unlocked after completing level <b>x</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single integer ― the minimum number of working days necessary to complete the Game.</p>

<h3>Constraints</h3>
<p>
<ul>
    <li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
    <li><b>1</b> ≤ <b>n</b> ≤ <b>1000</b></li>
    <li><b>1</b> ≤ <b>t<sub>i</sub></b> ≤ <b>h</b> ≤ <b>24</b></li>
    <li><b>0</b> ≤ <b>m<sub>x</sub></b> ≤ <b>10</b></li>
    <li> It is guaranteed that the structure of the Game levels is a tree, i.e. it is possible to unlock all <b>n</b> levels and every level (except for <b>1</b>) has exactly one other level that unlocks it.</li>
</ul>
</p>

<h3>Subtasks</h3>
<ul>
    <li>Subtask #1: <b>n ≤ 9</b> (7 points)</li>
    <li>Subtask #2: <b>m<sub>x</sub> ≤ 2</b> (20 points)</li>
    <li>Subtask #3: <b>n ≤ 100; h ≤ 8</b> (27 points)</li>
    <li>Subtask #4: Original constraints (46 points)</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
<tt>2
5 24
13 24 22 12 16
1 3
0
2 2 5
0
1 4
10 8
1 4 3 1 7 3 2 2 4 4
3 2 5 10
2 3 4
0
0
1 6
3 7 8 9
0
0
0
0</tt>

<b>Output:</b>
<tt>5
4</tt>

</pre>
<h3>Explanation</h3>
<p><b>Example case 1:</b> Chef has to complete every level during separate working days, and so to complete all <b>5</b> levels he needs <b>5</b> working days.
</p>
<p>
<b>Example case 2:</b> Chef will complete the Game if he will always push unlocked levels into stack starting with the largest indexed one and ending with the smallest indexed one. That is, after Chef completes level <b>1</b> he first pushes level <b>10</b> (<b>S = [10]</b>), then level <b>5</b> (<b>S = [10, 5]</b>) and then level <b>2</b> (<b>S = [10, 5, 2]</b>). So the second level Chef will play is <b>2</b>.
</p>