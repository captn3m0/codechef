---
{"category_name":"hard","problem_code":"TULIPS","problem_name":"Tiptoe through the tulips","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"meteora","problem_tester":"furko","date_added":"10-02-2016","tags":{"0":"centroid","1":"disjoint","2":"hard","3":"march16","4":"meteora","5":"segment"},"editorial_url":"http://discuss.codechef.com/problems/TULIPS","time":{"view_start_date":1458034200,"submit_start_date":1458034200,"visible_start_date":1458034200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/mandarin/TULIPS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/russian/TULIPS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH16/vietnamese/TULIPS.pdf">Vietnamese</a> as well.</h3>
<p>Cherry has discovered the Garden of Magical Tulips while going on a walk. The garden can be described as <b>N</b> nodes connected by <b>N-1</b> trails. The nodes are numbered from <b>1</b> to <b>N</b>. Each trail <b>i</b> connects two different nodes, <b>u<sub>i</sub></b> and <b>v<sub>i</sub></b> and has length <b>L<sub>i</sub></b>. It is possible to visit all the nodes starting from any node using a sequence of trails.<br />
<br /> Magical tulips like to grow alone, without being disturbed. So, every node has exactly one tulip growing there peacefully and a tulip never withers once it is fully grown. If a fully grown tulip is picked, a new one will grow in the same spot if it is left undisturbed for <b>X</b> contiguous days.
</p>
<p>
Sometimes, when Cherry goes for a walk, she visits the garden to collect some tulips for her beloved Jimma, who is always waiting at the window to see Cherry pass by. The number of tulips she collects on a particular day depends on her mood. She gets bored while walking on long trails, so on day <b>d<sub>j</sub></b>, Cherry will start at a node <b>u<sub>j</sub></b> and visit <b>all the nodes she can reach while taking only the trails whose length does not exceed k<sub>j</sub></b>. She will pick all the fully grown tulips she can find. But in the process, she might visit some nodes which do not have a fully grown tulip yet. These tulips will get upset and grow fully only after <b>X</b> days if Cherry doesn't disturb them again before that.<br /><br />
<b>i.e. if Cherry does not visit that node again before the day <b>d<sub>j</sub>+X</b>, then it will have a fully grown tulip on that day.</b> On day <b>d<sub>1</sub></b>, all the nodes have fully grown tulips.</p>
<p>
Cherry has never been to school and is not very good at counting, so she always wonders how many tulips she has collected. Please help Cherry figure out the number of tulips she collects for the next <b>Q</b> days she visits the garden.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a single integer <b>N</b>. The next <b>N-1</b> lines describe the edges. The <b>i+1<sup>th</sup></b> line contains three space separated integers <b>u<sub>i</sub></b>, <b>v<sub>i</sub></b> and <b>L<sub>i</sub></b>.</li>
<li>The next line contains two space separated integers <b>Q</b> and <b>X</b> and is followed by <b>Q</b> lines each describing the next <b>Q</b> days Cherry visits the garden. The <b>j<sup>th</sup></b> such line contains three space separated integers <b>d<sub>j</sub></b>, <b>u<sub>j</sub></b> and <b>k<sub>j</sub></b>.
</li></ul>
<h3>Output</h3>
<ul>
<li>For each test case, output <b>Q</b> lines.</li>
<li>The <b>j<sup>th</sup></b> line of each test case should contain the number of tulips Cherry collects on day <b>d<sub>j</sub></b>. </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N,Q</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>u<sub>i</sub></b>,<b>v<sub>i</sub></b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>L<sub>i</sub></b>,<b>k<sub>j</sub></b> ≤ <b>10<sup>8</sup></b>
</li><li><b>1</b> ≤ <b>d<sub>1</sub></b> ≤ <b>10<sup>8</sup></b>
</li><li><b>d<sub>j-1</sub></b> &lt; <b>d<sub>j</sub></b> ≤ <b>10<sup>8</sup></b> for <b>2</b> ≤ <b>j</b> ≤ <b>Q</b>
</li></ul>
<h3>Subtasks</h3>
<ul>
<li>Subtask 1:  <b>X</b> = <b>1</b> (15 points)</li>
<li>Subtask 2:  <b>1</b> ≤ <b>X</b> ≤ <b>10<sup>8</sup></b> (85 points)</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 
1 2 7
3 1 10
3 4
5 2 8
7 1 20
13 2 3

<b>Output:</b>
2
1
1
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> There are <b>3</b> queries. The tulips take <b>4</b> days to grow fully. In the first query, Cherry will visit nodes <b>1</b> and <b>2</b>, because the trail <b>3-1</b> has length greater than <b>8</b>. Both the nodes will have fully grown tulips. After Cherry picks them, the tulips will grow back on day <b>5+4</b>, if Cherry doesn't visit them again. So the output is <b>2</b>.<br />
<br /> In the second query, Cherry will visit all the trails because all of them have length less than <b>20</b>. The tulips at <b>1,2</b> haven't grown back yet and now all the tulips will take <b>4</b> more days. There is a tulip at <b>3</b>. So the output is <b>1</b>.<br />
<br /> In the third query, on day <b>13</b>, all the tulips have grown back, but Cherry will not use any of the trails because both of them have length greater than <b>3</b>. So, she will collect only one tulip - the tulip at <b>2</b>.</p>
