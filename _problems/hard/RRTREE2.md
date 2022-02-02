---
{"category_name":"hard","problem_code":"RRTREE2","problem_name":"Tree Again","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"Rubanenko","problem_tester":"shiplu","date_added":"12-07-2014","tags":{"0":"Rubanenko","1":"cook48","2":"dfs","3":"knapsack","4":"medium"},"editorial_url":"http://discuss.codechef.com/problems/RRTREE2","time":{"view_start_date":1405884600,"submit_start_date":1405884600,"visible_start_date":1405884600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/mandarin2/RRTREE2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK48/russian/RRTREE2.pdf">Russian</a> as well.</h3>
<p> </p>
<p>Misha likes playing DotA and he would do nothing else but play it if he could. Unfortunately for Misha, real life is rough and he has to solve following problem before spending a day playing. <br />
You are given a rooted tree with <b>N</b> vertices. Vertices are numerated from <b>1</b> to <b>N</b> and vertex <b>1</b> is the root of the tree. A positive integer <b>W<sub>i</sub></b> is assigned to every node. Consider following code:</p>
<pre><code>
Integer <b>sum</b> := 0;
Array of boolean marked := {false, false, false, ..., false};
Procedure Dfs(Integer <b>v</b>)
    Begin
        <b>sum</b> := <b>sum</b> + <b>W<sub>v</sub></b>;
        <b>marked[sum]</b> := true;
        For each node <b>u</b> that <b>v</b> is a parent of <b>u</b> do
            Begin
                Dfs(<b>u</b>);
            End;
    End;

</code></pre><p><br />
One can notice that the state of <b>marked[]</b> array depends on the order vertices <b>u</b> processed. You are to check for every integer number <b>s</b> from <b>1</b> to the sum of <b>W<sub>i</sub></b> whether there exists some order of viewing children in <b>Dfs</b> that <b>marked[s] = true.</b>  Note that <b>marked[]</b> and <b>sum</b> are global variables and <b>Dfs(1)</b> is initially called.
 </p>
<p> </p>
<h3>Input</h3>
<p>The first line contains integer <b>N</b> — the number of vertices in given tree. <b>N</b> integers <b>W<sub>i</sub></b> follow in the next line. Then <b>N-1</b> lines follow, <b>i<sup>th</sup></b> of them contains a parent of vertex <b>i+1</b>. </p>
<p> </p>
<h3>Output</h3>
<p>Let <b>S</b> be the sum over all <b>W<sub>i</sub></b>. You should output S characters <b>i<sub>th</sub></b> of which should be equal to <b>1</b> if it is possible to get <b>marked[i] = true</b> and <b>0</b> otherwise. Have a look at the example for better understanding. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>500</b></li>
<li><b>1</b> ≤ sum of all <b>W<sub>i</sub></b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>W<sub>i</sub></b> ≤ <b>100000</b></li>
<li> If <b> u </b> is the parent of vertex <b>v</b>  then <b> u </b>  &lt; <b>v</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
5
1 7 7 2 4
1
1
2
4

<b>Output:</b>
100000010100011010001

</pre><p> </p>
