---
{"category_name":"medium","problem_code":"IDOLS","problem_name":"Idols and Fans","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kostya_by","problem_tester":"rustinpiece","date_added":"31-05-2014","tags":{"0":"cook47","1":"hard","2":"heavy","3":"kostya_by","4":"segment"},"editorial_url":"http://discuss.codechef.com/problems/IDOLS","time":{"view_start_date":1403464500,"submit_start_date":1403464500,"visible_start_date":1403464500,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/mandarin2/IDOLS2.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK47/russian/IDOLS1.pdf">Russian</a> as well.</h3>
<p>Mike is a cool kid, so he's the most popular person in his school. All the girls want to be with him while all the boys want to be like him.</p>
<p>There are <b>N</b> persons in Mike's school. No person in the school has a name(except Mike), but all of them have a unique ID integer number for the range[1..<b>N</b>]. Mike's ID equals to 1. Also, each person(except Mike) has his/her <i>personal idol</i>, who is another person from the school. Finally, each person <b>X</b> has an integer number <b>A<sub>X</sub></b>.</p>
<p>Let's define functions <b>F</b> and <b>G</b> for a person with ID equals to <b>X</b>:</p>
<p><ul>
<li>If <b>X</b> = 1(which means that person <b>X</b> is Mike), then <b>F<sub>X</sub></b> = <b>A<sub>X</sub></b> and <b>G<sub>X</sub></b> = 1;
</li><li>Otherwise, let <b>Y</b> be the personal idol for <b>X</b>.
<ul>
<li>If <b>F<sub>Y</sub></b> + 1 &lt; <b>A<sub>X</sub></b>, then <b>F<sub>X</sub></b> = <b>A<sub>X</sub></b> and <b>G<sub>X</sub></b> = 1;
</li><li>If <b>F<sub>Y</sub></b> + 1 > <b>A<sub>X</sub></b>, then <b>F<sub>X</sub></b> = <b>F<sub>Y</sub></b> + 1 and <b>G<sub>X</sub></b> = <b>G<sub>Y</sub></b>;
</li><li>If <b>F<sub>Y</sub></b> + 1 = <b>A<sub>X</sub></b>, then <b>F<sub>X</sub></b> = <b>F<sub>Y</sub></b> + 1 and <b>G<sub>X</sub></b> = <b>G<sub>Y</sub></b> + 1.
</li></ul>
</li></ul>
</p>
<p>It's guaranteed, that it's possible to calculate functions <b>F</b> and <b>G</b> for every person in the school.</p>
<p>
You are to write a program, that can efficiently process queries of the following types:</p>
<ul>
<li>0 <b>X</b> <b>NEW_VALUE</b> - change the value of <b>A<sub>X</sub></b> to <b>NEW_VALUE</b>;
</li><li>1 <b>X</b> - calculate <b>F<sub>X</sub></b> and <b>G<sub>X</sub></b>.
</li></ul>

<h3>Input</h3>
<p>The first line of the input contains two integers <b>N</b> and <b>Q</b>, denoting the number of the persons in Mike's school and the number of queries to process.</p>
<p>The second line contains <b>N</b> integers <b>A<sub>i</sub></b>, denoting <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b>.</p>
<p>The third line contains <b>N - 1</b> integers <b>P<sub>i</sub></b>, denoting the personal idols of persons with IDs equal to 2, 3, ..., <b>N</b>. 1 ≤ <b>P<sub>i</sub></b> &lt; <b>i</b>. </p>
<p>The next <b>Q</b> lines contain information about the queries. The format of the queries is the same with the one described in the statement.</p>
<h3>Output</h3>
<p>For each query of the second type, output a single line containing two integers, <b>F<sub>X</sub></b> and <b>G<sub>X</sub></b>.</p>
<h3>Constraints</h3>
<p>1 ≤ <b>N</b> ≤ 100000;</p>
<p>1 ≤ <b>Q</b> ≤ 300000;</p>
<p>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup>, for each person;</p>
<p>1 ≤ <b>X</b> ≤ <b>N</b>, 1 ≤ <b>NEW_VALUE</b> ≤ 10<sup>9</sup>, for each query of the first type.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 2
1 2 3 4 5
1 2 3 4
1 5
0 1 100

<b>Output:</b>
5 5
</pre><h3>Explanations</h3>
<p>
In the input, before the second query, <b>F</b>'s and <b>G's</b> equals to the following:
</p>
<p><table>
<tr>
<td><b>ID</b></td>
<td><b>F</b></td>
<td><b>G</b></td>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>2</td>
<td>2</td>
</tr>
<tr>
<td>3</td>
<td>3</td>
<td>3</td>
</tr>
<tr>
<td>4</td>
<td>4</td>
<td>4</td>
</tr>
<tr>
<td>5</td>
<td>5</td>
<td>5</td>
</tr>
</table>
</p>
<p>
After the second query, <b>F</b>'s and <b>G's</b> equals to the following:
</p>
<p><table>
<tr>
<td><b>ID</b></td>
<td><b>F</b></td>
<td><b>G</b></td>
</tr>
<tr>
<td>1</td>
<td>100</td>
<td>1</td>
</tr>
<tr>
<td>2</td>
<td>101</td>
<td>1</td>
</tr>
<tr>
<td>3</td>
<td>102</td>
<td>1</td>
</tr>
<tr>
<td>4</td>
<td>103</td>
<td>1</td>
</tr>
<tr>
<td>5</td>
<td>104</td>
<td>1</td>
</tr>
</table>
</p>
