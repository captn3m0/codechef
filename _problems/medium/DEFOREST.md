---
{"category_name":"medium","problem_code":"DEFOREST","problem_name":"Chef and Deforestation","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.5","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"CLOJ","47":"COB","48":"FS"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"usaxena95","problem_tester":null,"date_added":"13-11-2017","tags":{"0":"acm17chn","1":"chn17rol","2":"data","3":"med","4":"usaxena95"},"editorial_url":"https://discuss.codechef.com/problems/DEFOREST","time":{"view_start_date":1515357000,"submit_start_date":1515357000,"visible_start_date":1515357000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Chef has come to a forest. He sees <b>N</b> trees in a line. He wants to tie a rope from the top of one tree to the top of another. To successfully tie this rope, he needs to cut the trees that get in the way of the rope. However, he does not like this kind of deforestation and wants your help to choose the best pair of trees between which to tie the rope.</p>
<p>Formally, you are given <b>N</b> trees on the X-axis. Tree<b> T<sub>i</sub></b> has height <b>H<sub>i</sub></b> and is planted at <b>x = x<sub>i</sub></b>.</p>
<p>You need to choose two trees <b>T<sub>i</sub></b> and <b>T<sub>j</sub></b> (where <b>x<sub>i</sub></b> &lt; <b>x<sub>j</sub></b> and <b>H<sub>i</sub></b> &lt; <b>H<sub>j</sub></b>) and connect the <b>tops</b> of these trees with a rope such that the following conditions are satisfied:
<ul>
<li>The angle between the rope and the X-axis is equal to <b>45</b> degrees.</li>
<li>The rope <b>does not pass</b> through any other trees.</li>
</ul></p>
<p>In order to satisfy the second condition, you are allowed to reduce the height of any trees except <b>T<sub>i</sub></b> and <b>T<sub>j</sub></b>. Formally, you should choose numbers <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, ..., <b>C<sub>N</sub></b>, such that <b>0 ≤ C<sub>k</sub> ≤ H<sub>k</sub></b> for each <b>1 ≤ k ≤ N</b> and <b>C<sub>i</sub> = C<sub>j</sub> = 0</b>. Then decrease <b>H<sub>k</sub></b> by <b>C<sub>k</sub></b> for each <b>1 ≤ k ≤ N</b>.</p>
<p>Find the maximum value of <b>(length of the rope between the two tops)</b> - <b>(sum of C<sub>k</sub> for each tree T<sub>k</sub>)</b>.</p>

<p>Note that the rope can touch the top of some intermediate tree. Look at the examples given for such a scenario.</p>

<h3>Input</h3>
<p><ul>
<li>The first line of the input contains a single integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of trees.</li>
<li>Each of the following <b>N</b> lines contains two space-separated integers denoting <b>x<sub>i</sub></b> and<b> H<sub>i</sub></b>.</li>
</ul></p>

<h3>Output</h3>
<p>For each test case, print a single line with the maximum value of the given expression. Your answer will be considered correct if the <b>absolute or relative error ≤</b> <b>10<sup>-6</sup></b>. If it's impossible to find any valid pair of trees to tie the rope between, print <b>-1</b> instead.</p>

<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 100</li>
<li>1 ≤ <b>x<sub>i</sub>, H<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>1 ≤ <b>N</b> ≤ 2.5 · 10<sup>5</sup></li>
<li>all <b>x<sub>i</sub></b> will be distinct</li>
<li>sum of <b>N</b> over all test cases <b>≤ 5 · 10<sup>5</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>

2
3
1 1
2 2
3 3
3
1 1
2 5
3 3

<b>Output:</b>

2.82842712
-0.17157287
</pre>

<h3>Explanation</h3>
<p><b>Example case 1:</b> Tie the rope from tree 1 (1,1) to tree 3 (3,3). You don't need to cut down any trees. Note that this rope would touch the top of tree 2, but that is fine. Answer = length of rope = 2 · sqrt(2) = 2.82842.</p>
<p><b>Example case 2:</b> Tie the rope from tree 1 (1,1) to tree 3 (3,3). You need to cut down tree 2 from height 5 to height 2. Answer = length of rope - (height reduction of tree 2) = 2 · sqrt(2) - 3 = -0.17157287.</p>