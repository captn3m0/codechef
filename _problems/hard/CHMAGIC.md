---
{"category_name":"hard","problem_code":"CHMAGIC","problem_name":"Chef and Magic Numbers ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"furko","problem_tester":"balajiganapath","date_added":"5-08-2013","tags":{"0":"ad","1":"furko","2":"ltime04","3":"medium"},"editorial_url":"http://discuss.codechef.com/problems/CHMAGIC","time":{"view_start_date":1380445200,"submit_start_date":1380445200,"visible_start_date":1380445200,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
  Chef is the cleverest man in the whole world. However he is not interested in science, give him the magic. His first magic lesson consists of  converting a number <b>k</b> to <b>F(k)</b> where <b>F(k)</b> - is the <b>k-th</b> magic integer. An integer is magic if <b>S(n)</b> is smaller than or equal to <b>q</b>. <b>S(n)</b> is the sum of squares of the digits in n. For example, <b>S(13) = 1^2 + 3^2 = 10</b>.
</p><p>
   Now Chef want to test his magical abilities. He knows how to solve this task, but who will check it? That is where you come in.
</p>
<p>
  The problem is as follows: there is an array of <b>N</b> numbers. Let <b>A</b> be the given array. Then <b>Bi</b> = <b>F(Ai)</b> for all <b>i</b> <b>(1 &lt;= i &lt;= N)</b>. This is followed by <b>M</b> queries of the form <b>(l, r)</b>. For each such query you need to find the sum of the elements of the array <b>B</b> that are in the interval <b>(l, r)</b> modulo 1000000007.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>q</b>. The next line contains an integer <b>N</b>. The third line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the given array. Next line contains <b>M</b> denoting the number of queries. The next <b>M</b> lines contains two integers denoting left and right ends of queries.  </p>
<p> </p>
<h3>Output</h3>
<p>   For each query, output a single line containing   sum of the elements of the array <b>B</b> in the given interval.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>q</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>3*10^5</b></li>
<li><b>1</b> ≤ <b>Ai</b> ≤ <b>3*10^5</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10^5</b></li>
<li><b>1</b> ≤ <b>l</b> ≤ <b>r</b> ≤ <b>N</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
201
5
1 2 10 5 10000
5
1 1
2 2
3 3
5 5
1 5  
<b>Output:</b>
1
2
10
10636
10654 
</pre><p> </p>
<h3>Scoring</h3>
<p>Subtask 1 (30 points): <b>200 ≤ q ≤ 10<sup>9</sup></b>. <br /><br />
Subtask 2 (70 points):  Look at constraints<br /></p>
