---
{"category_name":"medium","problem_code":"DIGITLIS","problem_name":"Digit Longest Increasing Subsequences","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alex_2oo8","problem_tester":"kingofnumbers","date_added":"5-08-2016","tags":{"0":"alex_2oo8","1":"cook78","2":"dp","3":"easy","4":"lis"},"editorial_url":"https://discuss.codechef.com/problems/DIGITLIS","time":{"view_start_date":1485109800,"submit_start_date":1485109800,"visible_start_date":1485109800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/mandarin/DIGITLIS.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/russian/DIGITLIS.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK78/vietnamese/DIGITLIS.pdf">Vietnamese</a> as well.</h3>


<p>Recently Chef learned about <a href="https://en.wikipedia.org/wiki/Longest_increasing_subsequence">Longest Increasing Subsequence</a>. To be precise, he means longest <b>strictly</b> increasing subsequence, when he talks of longest increasing subsequence.  To check his understanding, he took his favorite <b>n</b>-digit number and for each of its <b>n</b> digits, he computed the length of the longest increasing subsequence of digits ending with that digit. Then he stored these lengths in an array named <b>LIS</b>.</p>

<p>For example, let us say that Chef's favourite <b>4</b>-digit number is <b>1531</b>, then the <b>LIS</b> array would be <b>[1, 2, 2, 1]</b>. The length of longest increasing subsequence ending at first digit is <b>1</b> (the digit <b>1</b> itself) and at the second digit is <b>2</b> (<b>[1, 5]</b>), at third digit is also <b>2</b> (<b>[1, 3]</b>), and at the <b>4</b>th digit is <b>1</b> (the digit <b>1</b> itself).</p>

<p>Now Chef is wondering, how many different <b>n</b>-digit numbers (without leading zeros) are there that have exactly the given <b>LIS</b> array? As this number could be very large, output it modulo <b>(10<sup>9</sup> + 7)</b>.</p>

<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. </p>
<p>For each test case, the first line contains an integer <b>n</b> denoting the number of digits in Chef's favourite number.</p>
<p>The second line will contain <b>n</b> space separated integers denoting <b>LIS</b> array, i.e. <b>LIS<sub>1</sub>, LIS<sub>2</sub>, ..., LIS<sub>n</sub></b>.</p>

<h3>Output</h3>
<p>For each test case, output a single integer ― count of different <b>n</b>-digit numbers having the given <b>LIS</b> array, modulo <b>(10<sup>9</sup> + 7)</b>.</p>

<h3>Constraints</h3>
<ul>
    <li><b>1</b> ≤ <b>T</b> ≤ <b>2 000</b></li>
    <li><b>1</b> ≤ <b>n</b> ≤ <b>1 000</b></li>
    <li>Sum of <b>n</b> over all <b>T</b> testcases is denoted by <b>S</b></li>
    <li><b>1</b> ≤ <b>S</b> ≤ <b>10 000</b></li>
    <li>It is guaranteed that at least one <b>n</b>-digit number having the given <b>LIS</b> array exists.
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
4
1 
1
2 
1 2
2 
1 1
3 
1 2 3

<b>Output:</b>
10
36
54
84
</pre>

<h3>Explanation</h3>
<p><b>Example case 1.</b> All one-digit numbers have the same <b>LIS</b> array, so the answer is <b>10</b>: <b>0, 1, 2, 3, ..., 9</b>.</p>

<p><b>Example cases 2 & 3.</b> Overall we have <b>90</b> two-digit numbers (from <b>10</b> to <b>99</b>). Numbers with second digit strictly greater than first digit have <b>LIS</b> array <b>[1, 2]</b> and there are <b>36</b> such numbers. All the other two-digit numbers have <b>LIS</b> array <b>[1, 1]</b>.</p>

<p><font size="3" color="#656565">An example of how array <b>LIS</b> is constructed</font></p>
<p>We will take <b>7</b>-digit number <b>1730418</b>, its <b>LIS</b> array is <b>[1, 2, 2, 1, 3, 2, 4]</b>:
<center><table>
    <tr align="center">
        <td>index</td>
        <td>LIS</td>
        <td>length</td>
    </tr>
    <tr align="center">
        <td>1</td>
        <td><font color="#578fb2"><b>1</b></font>730418</td>
        <td>1</td>
    </tr>
    <tr align="center">
        <td>2</td>
        <td><font color="#578fb2"><b>17</b></font>30418</td>
        <td>2</td>
    </tr>
    <tr align="center">
        <td>3</td>
        <td><font color="#578fb2"><b>1</b></font>7<font color="#578fb2"><b>3</b></font>0418</td>
        <td>2</td>
    </tr>
    <tr align="center">
        <td>4</td>
        <td>173<font color="#578fb2"><b>0</b></font>418</td>
        <td>1</td>
    </tr>
    <tr align="center">
        <td>5</td>
        <td><font color="#578fb2"><b>1</b></font>7<font color="#578fb2"><b>3</b></font>0<font color="#578fb2"><b>4</b></font>18</td>
        <td>3</td>
    </tr>
    <tr align="center">
        <td>6</td>
        <td>173<font color="#578fb2"><b>0</b></font>4<font color="#578fb2"><b>1</b></font>8</td>
        <td>2</td>
    </tr>
    <tr align="center">
        <td>7</td>
        <td><font color="#578fb2"><b>1</b></font>7<font color="#578fb2"><b>3</b></font>0<font color="#578fb2"><b>4</b></font>1<font color="#578fb2"><b>8</b></font></td>
        <td>4</td>
    </tr>
</table></center>
</p>