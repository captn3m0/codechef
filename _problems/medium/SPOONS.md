---
{"category_name":"medium","problem_code":"SPOONS","problem_name":"Project Spoon","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"viv001","problem_tester":"xcwgf666","date_added":"15-07-2013","tags":{"0":"combinatorics","1":"easy","2":"sept13","3":"viv001"},"editorial_url":"http://discuss.codechef.com/problems/SPOONS","time":{"view_start_date":1379323800,"submit_start_date":1379323800,"visible_start_date":1379323800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p> Lo and Behold! For you may be surprised by what our chief chef Noodle has in mind for this season! Today, Noodle announced one of his most extra-ordinary ideas ever - <b>Project Spoon</b>. <br/></br/></p>
<p> Noodle plans to deploy large spoons in the atmosphere so that people all around the world can download food directly from his kitchen thereby saving him a lot of overhead cost. Yes, you read that right. Large spoons suspended in the atmosphere. </p>
<p> Noodle decides the following strategy to implement his idea. He will deploy exactly <b>N</b> spoons in the country. Every spoon can cater to as many cities as it wants. The only catch is that between every pair of  spoons <b>A</b> and <b>B</b>,  <b>A</b> must cater to at-least one city that <b>B</b> doesn't cater to, and <b> B </b> must cater to at-least one city that <b>A</b> doesn't cater to. </p>
<p> Noodle would like to know what is the minimum number of cities a country must have for his strategy to be successful. Since, he is not all that good with calculation, he asks you to help him with it. </p>

<h3>Input</h3>
<p> The first line contains an integer <b>T</b> denoting the number of test cases. Each of the next <b>T</b> lines contain an integer <b>N</b>, the number of spoons that Noodle plans to deploy in the country.</p>
<h3>Output</h3>
<p> For every test case, print in a single line the number of minimum cities required.</p>
<h3>Constraints</h3>
<ul>
<li><b> 1 </b>≤  <b>T</b> ≤ <b>  100000 </b></li>
<li><b> 2 </b> ≤ <b>N</b>  ≤ <b> 10<sup>18</sup> </b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2
3

<b>Output:</b>
2
3
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br/><br />
Each spoon caters to a different city. Since there are two spoons, two cities are sufficient.
 </br/></p>
<p><b>Example case 2.</b><br/><br />
Again, each spoon needs to cater to one city and there are three spoons. So, three cities are required at minimum.
</br/></p>
