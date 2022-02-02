---
{"category_name":"hard","problem_code":"QUERY","problem_name":"Observing the Tree","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"xcwgf666","problem_tester":"laycurse","date_added":"26-12-2012","tags":{"0":"feb13","1":"hard","2":"heavy","3":"persistence","4":"xcwgf666"},"editorial_url":"http://discuss.codechef.com/problems/QUERY","time":{"view_start_date":1360583823,"submit_start_date":1360583823,"visible_start_date":1360582602,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef gives you a tree, consisting of <b>N</b> nodes. The nodes are numbered from <b>1</b> to <b>N</b>, and each node has an integer, which is equal to <b>0</b> initially. Then, Chef asks you to perform <b>M</b> queries.</p>
<p>The first type of queries is <i>changing</i>: here, you are given integers <b>X</b>, <b>Y</b>, <b>A</b> and <b>B</b>. Add <b>A</b> to the integer, associated with the node <b>X</b>, then add <b>A+B</b> to the integer, associated with the second node on the way from <b>X</b> to <b>Y</b>, then add <b>A+2*B</b> to the integer, associated with the third node on the way from <b>X</b> to <b>Y</b>, and so on. As you know, there is only one simple path from <b>X</b> to <b>Y</b>.</p>
<p>The second type of queries is a <i>question</i>: here, you are given integers <b>X</b> and <b>Y</b>. Output the sum of all integers, associated with nodes on the way from <b>X</b> to <b>Y</b>.</p>
<p>The third type of queries is a <i>rollback</i>: here, you are given an integer <b>X</b>. All the integers associated with the nodes return to the state after the <b>X</b>-th changing query. If <b>X</b> is <b>0</b>, then all of them become equal to zero, as in the very beginning.</p>
<h3>Input</h3>
<p>The first line of an input consists of two integers - <b>N</b> and <b>M</b>.</p>
<p>Then, <b>N−1</b> lines follow. These <b>N−1</b> lines describe the tree structure. Each line consists of two integers - <b>X</b> and <b>Y</b>, and that means that there is an edge between node <b>X</b> and node <b>Y</b>.</p>
<p>Then, <b>M</b> lines follow. A single line denotes a single query, which has one of the following forms: (See the sample for the detailed explanation)</p>
<ul>
<li>c <b>X<sub>1</sub></b> <b>Y<sub>1</sub></b> <b>A</b> <b>B</b> - <i>changing</i> query,</li>
<li>q <b>X<sub>1</sub></b> <b>Y<sub>1</sub></b> - <i>question</i> query,</li>
<li>l <b>X<sub>1</sub></b> - <i>rollback</i> query. </li>
</ul>
<p>As you can see, the numbers <b>X</b> and <b>Y</b> aren't given to you directly. For the <i>rollback</i> query, actual number <b>X</b> will be equal to <b>(X<sub>1</sub>+lastans) modulo (total number of <i>changing</i> queries before this query + 1)</b>. For the <i>changing</i> and <i>question</i> queries, <b>X</b> will be equal to <b>((X<sub>1</sub>+lastans) modulo N)+1</b> and <b>Y</b> will be equal to <b>((Y<sub>1</sub>+lastans) modulo N)+1</b>, where <b>lastans</b> denotes the last number that you have output, or zero if you haven't output any numbers yet.</p>
<h3>Output</h3>
<p>For each <i>question</i> query output the answer on a single line.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b>, <b>M</b> ≤ 100000 (10<sup>5</sup>)</li>
<li>0 ≤ <b>A</b>, <b>B</b> ≤ 1000</li>
<li>0 ≤ <b>X<sub>1</sub></b>, <b>Y<sub>1</sub></b> ≤ 100000 (10<sup>5</sup>)</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 7
1 2
2 3
3 4
4 5
c 1 4 2 3
c 2 3 5 10
q 1 3
l 1
q 1 3
l 1
q 1 3

<b>Output:</b>
35
0
15
</pre><h3>Explanation</h3>
<p>As you can see, the tree in the sample is like a line. Let's denote the first state of integers <b>0 0 0 0 0</b>, where the <b>i</b>-th integer means the integer associated with the node <b>i</b>.</p>
<p>In the first <i>changing</i> query <b>"c 1 4 2 3"</b>, the actual numbers are <b>X = (1 + 0) modulo 5 + 1 = 2, Y = (4 + 0) modulo 5 + 1 = 5</b>. Hence the state will be <b>0 2 5 8 11</b> after this query.</p>
<p>After the second <i>changing</i> query <b>"c 2 3 5 10"</b>, the state will be <b>0 2 10 23 11</b> for similar reason.</p>
<p>In the next <i>question</i> query, the actual numbers are <b>X = (1 + 0) modulo 5 + 1 = 2, Y = (3 + 0) modulo 5 + 1 = 4</b>. Hence the answer must be <b>2 + 10 + 23 = 35</b>.</p>
<p>In the first rollback query <b>"l 1"</b>, the actual number is <b>X = (1 + 35) modulo (2 + 1) = 36 modulo 3 = 0</b>, since <b>lastans = 36</b>. Thus the state will be rollbacked to <b>0 0 0 0 0</b>.</p>
<p>Then the answer of the next <i>question</i> query <b>"q 1 3"</b> must be 0, because all integers are currently 0.</p>
<p>In the second rollback query <b>"l 1"</b>, the actual number is <b>X = (1 + 0) modulo (2 + 1) = 1</b>, since <b>lastans = 0</b>. Thus the state will be <b>0 2 5 8 11</b>, which is the state after the first <i>changing</i> query.</p>
<p>Then the answer of the last <i>question</i> query must be <b>2 + 5 + 8 = 15</b>.</p>
