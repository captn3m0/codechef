---
{"category_name":"medium","problem_code":"SHDWCMP","problem_name":"Company Club Membership","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 6.3","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.5","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"grumpy_gordon","problem_tester":"lg5293","date_added":"20-06-2017","tags":{"0":"binary","1":"dfs","2":"grumpy_gordon","3":"hard","4":"ltime49","5":"partial","6":"segment"},"time":{"view_start_date":1498323600,"submit_start_date":1498323600,"visible_start_date":1498323600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3>Read problems statements in <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/mandarin/SHDWCMP.pdf">mandarin chinese</a>, <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/russian/SHDWCMP.pdf">russian</a> and <a target="_blank" 
href="http://www.codechef.com/download/translated/LTIME49/vietnamese/SHDWCMP.pdf">vietnamese</a> as well.</h3>

<p>You are working in a company with <b>N</b> employees numbered from <b>0</b> to <b>N - 1</b>, and employee <b>0</b> is the director. Each employee, except the director, has a supervisor. The director doesn't have a supervisor. Let's call employee <b>v</b>, an ancestor of employee <b>u</b> if and only if <b>v</b> is the supervisor of <b>u</b> or <b>v</b> is an ancestor of the supervisor of <b>u</b>.</p>

<p>Also, each employee belongs to exactly one club at any moment. Employee <b>i</b> belongs to club number <b>C<sub>i</sub></b> initially. The company has assemblies for which all the employees of the company gather. During an assembly, the employees introduce each other, in a particular fashion. Employee <b>v</b> introduces employee <b>a</b> to employee <b>b</b> if <b>a, b,
v</b> are from the same club, <b>a</b> is ancestor of <b>v</b> and <b>v</b> is ancestor of <b>b</b>.<p>
<p>Also some employees may change their club. You are given these changes, and you need to calculate the total number of introduces if an assembly was to be held after each such club membership change.</p>

<h3>Input</h3>
<ul>
<li>The first line contains two integers, <b>N</b> and <b>Q</b>, denoting the number of employees in the company and the number of club membership changes, respectively.</li>
<li>The second line contains <b>N - 1</b> space-separated integers: <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N - 1</sub></b>, denoting the supervisors. <b>P<sub>i</sub></b> is the supervisor of employee <b>i</b>.</li>
<li>The third line contains <b>N</b> space-separated integers: <b>C<sub>0</sub></b>, <b>C<sub>1</sub></b>, ..., <b>C<sub>N - 1</sub></b>, denoting the clubs. <b>C<sub>i</sub></b> is the club that employee <b>i</b> belongs to initially.</li>
<li>Then, <b>Q</b> lines follow which contain the numbers <b>X<sub>1</sub></b>, <b>X<sub>2</sub></b>, .., <b>X<sub>Q</sub></b>, one in each line. That is, line number <b>i + 3</b> contains <b>X<sub>i</sub></b>. What it denotes is explained below.</li>
</ul>
<p></p>
<p>The queries are encoded, and have to be decoded online. The i-th change (i running from 1 to <b>Q</b>) is that employee number (<b>i</b> - 1) mod <b>N</b> changes his club to (<b>X<sub>i</sub> + ans</b>) mod <b>N</b>. Where <b>ans</b> is the previous output (Note that, even for i = 1, there is a "previous output", because as is explained below, the first output has to be before any change).</p>


<h3>Output</h3>
<p>You have to output <b>Q + 1</b> lines. Line number <b>i + 1</b> should contain the answer for the original company after first <b>i</b> changes. That is, you should output the answer for the original company, and then after each club membership change.</p>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500000</b></li>
<li><b>1</b> ≤ <b>Q</b> ≤ <b>500000</b></li>
<li><b>0</b> ≤ <b>P<sub>i</sub></b> < <b>i</b></li>
<li><b>0</b> ≤ <b>C<sub>i</sub></b> < <b>N</b></li>
<li><b>0</b> ≤ <b>X<sub>i</sub></b> < <b>N</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1 (30 points): <b>N</b>, <b>Q</b> ≤ <b>2000</b></li>
<li>Subtask #2 (20 points): <b>N</b> ≤ <b>2000</b></li>
<li>Subtask #3 (35 points): <b>N</b>, <b>Q</b> ≤ <b>100000</b></li>
<li>Subtask #4 (15 points): Original constraints</li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
9 2
0 0 1 1 2 3 3 5
1 0 1 0 2 1 0 0 1
5
8

<b>Output:</b>
6
3
2
</pre>

<h3>Explanation</h3>
<p>We represent employee <b>v</b> introducing employee <b>a</b> to employee <b>b</b>, by the triplet (<b>a, v, b</b>).</p>

<p>Initially, before any change, there are a total of 6 introduces. They are:
<ul>
<li>(0, 2, 5)</li>
<li>(0, 2, 8)</li>
<li>(0, 5, 8)</li>
<li>(2, 5, 8)</li>
<li>(1, 3, 6)</li>
<li>(1, 3, 7)</li>
</ul>
<p></p>
So, the first output is 6. So <b>ans</b> = 6 now.</p>

<p>To decode the first change, we consider (<b>X<sub>1</sub> + ans</b>) mod <b>N</b> = (5 + 6) mod 9 = 2. So, employee (<b>i</b> - 1) mod <b>N</b> = employee 0, changes his club to 2. After this change, the number of introduces reduces. There is no new introduce triplet formed, but the triplets (0, 2, 5), (0, 2, 8) and (0, 5, 8) are no longer valid. Hence, there are only 3 introduces which are:
<ul>
<li>(2, 5, 8)</li>
<li>(1, 3, 6)</li>
<li>(1, 3, 7)</li>
</ul>
<p></p>
<p>So the second output is 3, and <b>ans</b> becomes 3 now.</p>

<p>To decode the second change, we consider (<b>X<sub>2</sub> + ans</b>) mod <b>N</b> = (8 + 3) mod 9 = 2. So, employee (<b>i</b> - 1) mod <b>N</b> = employee 1, changes his club to 2. Now, some old introduces are lost, and some new ones formed. The introduces after this change are:
<ul>
<li>(2, 5, 8)</li>
<li>(0, 1, 4)</li>
</ul>
<p></p>
<p>So the third output is 2.</p>