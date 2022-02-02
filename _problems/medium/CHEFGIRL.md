---
{"category_name":"medium","problem_code":"CHEFGIRL","problem_name":"Chef and Girls","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"berezin","problem_tester":"xcwgf666","date_added":"25-10-2015","tags":{"0":"berezin","1":"dec15","2":"directed","3":"dynamic","4":"graphs","5":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CHEFGIRL","time":{"view_start_date":1450085400,"submit_start_date":1450085400,"visible_start_date":1450085400,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/mandarin/CHEFGIRL.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/russian/CHEFGIRL.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC15/vietnamese/CHEFGIRL.pdf">Vietnamese</a> as well.</h3>


<p>Chef has a problem - he likes a girl but she has <b>32</b> secrets and <b>N</b> friends (also girls).</p>
<p>Chef has enumerated each girl from <b>1</b> to <b>N</b>, Chef's crush has the number <b>1</b>.</p>
<p>Now he consider all girls as nodes of a directed graph. If one girl has an edge directed towards another girl, the former tells all the secrets she knows to the latter. Edges are oriented, so if one girl is sharing secrets with another, it doesn't imply the same relation in the reverse direction. Also, there are no cycles in the graph.
</p>
<p>
Each girl (except Chef's crush) has only one edge emanating from her, or doesn't have any edges emanating from her at all. Each girl listens to at most one girl. In other words, for each girl, there is only one girl who reveals secrets to her, or there are no such girls at all. Each edge has two integers assigned to it, specifying the <b>range of interest</b>. If girl <b>A</b> knows secrets in the range <b>[10-20]</b> and an edge directed towards girl <b>B</b> with a range of interest <b>[2-15]</b> then girl <b>B</b> will know secrets in the range <b>[10-15]</b>, which is, evidently, an intersection of the range of secrets and the interest range.</p>
<p>Chef's crush has all the <b>[1-32]</b> secrets, other girls just listen to her and then gossip around (share those secrets). If a girl doesn't have an edge emanating from her, she tells all the secrets she knows to Chef.</p>
<p>Chef can perform operations of the following kind: take some edge, and extend its range of interest by one (to the left or the right). He wants to know the minimal number of operations he needs to perform in order to collect all the secrets.</p>

<h3>Input</h3>
<ul>
<li>The first line contains two integers <b>N</b> and <b>M</b> denoting the number of girls and ribs appropriately. </li>
<li>Each of next <b>M</b> lines describe an edge, and contains four integers — <b>i</b>, <b>j</b>, <b>l</b>, <b>r</b> — meaning that there is an oriented edge from <b>i</b> to <b>j</b> with a range of interest <b>[l-r]</b>. </li>
</ul>

<h3>Output</h3>
<ul>
<li>In a single line, output a single integer: the answer. </li>
</ul>

<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b> i</b> < <b> j</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b> l</b> ≤ <b> r</b> ≤ <b>32</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask <b>N, M</b> ≤ <b>10</b>. Points: <b>10</b> </li>
<li>Subtask <b>N, M</b> ≤ <b>10^3</b>. Points: <b>20</b> </li>
<li>Subtask <b>Original constraints</b>. Points: <b>70</b> </li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
5 4
1 2 10 15
1 3 10 16
2 4 1 1
3 5 10 15

<b>Output:</b>
50
</pre>

<pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b></p>
Without any changes made by Chef, we will have the following knowledge propagation:
Girl <b>1</b> knows <b>[1-32]</b>.
Girl <b>2</b> knows <b>[10-15]</b> (intersection of <b>[1-32]</b> and <b>[10-15]</b>).
Girl <b>3</b> knows <b>[10-16]</b> (intersection of <b>[1-32]</b> and <b>[10-16]</b>).
Girl <b>4</b> knows <b>[]</b> (intersection of <b>[10-15]</b> and <b>[1-1]</b>).
Girl <b>5</b> knows <b>[10-15]</b> (intersection of <b>[10-16]</b> and <b>[10-15]</b>).

So Chef can collect secrets <b>[10-15]</b> only.

Here is the solution:

1. Change <b>1 2 10 15</b> to <b>1 2 1 15</b> (by applying the operation <b>9</b> times).
2. Change <b>2 4 1 1</b> to <b>2 4 1 9</b> (by applying the operation <b>8</b> times).
3. Change <b>1 3 10 16</b> to <b>1 3 10 32</b> (by applying the operation <b>16</b> times).
3. Change <b>3 5 10 15</b> to <b>1 3 10 32</b> (by applying the operation <b>17</b> times).

Now, all secrets in the range <b>[1-9]</b> will go through <b>1-2-4</b> and all secrets in the range <b>[10-32]</b> will go through <b>1-3-5</b>, finally reaching Chef.
And the total cost is <b>50</b>.
</pre>