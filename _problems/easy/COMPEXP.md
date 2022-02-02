---
{"category_name":"easy","problem_code":"COMPEXP","problem_name":"Compression Algorithm","languages_supported":{"0":"C","1":"JAVA","2":"PYTH","3":"PYTH 3.5","4":"PYPY"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"usaxena95","problem_tester":null,"date_added":"30-10-2017","tags":{"0":"acmind17","1":"easy","2":"expected","3":"usaxena95"},"time":{"view_start_date":1509900600,"submit_start_date":1509900600,"visible_start_date":1509900600,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Mr. X has come up with a new string compression algorithm. Consider a string of length <b>N</b> which contains up to <b>K</b> distinct characters. The compression algorithm works as follows: Replace each maximal contiguous substring containing only one distinct character (repeated an arbitrary number of times) and replace it by 2 values: the character and the length of the substring.</p>
<p>For example, the string "aabbaaa" will be compressed to "a, 2, b, 2, a, 3". Thus the length of the compressed string is 6.</p>
<p>

<p>
Since Mr. X is living in advanced times, the length of any integer is considered to be 1. For example, if a string is compressed to "a, 111, b, 13", then its length after compression is considered to be 4.
</p>

<p>
To test his algorithm, he needs to know the expected length of the compressed string for given <b>N</b> and <b>K</b> if the input string is randomly uniformly chosen from all possibilities. He wants to run this experiment multiple times for different <b>N, K</b> and needs your help.</p>


<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of queries. The description of <b>T</b> test cases follows.</p>
<p>The first and only line of each test case contains two integers <b>N</b> and <b>K</b> denoting the number of letters in the input string and the maximum number of distinct characters that can be present in the string.
</p>

<h3>Output</h3>
<p>
    For each test case, output a single line containing the expected length of the compressed string. 
    Your answer will be considered correct if the absolute error is less than <b>10<sup>-6</sup></b>
</p>

<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ N, K ≤ 10<sup>9</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 1
3 2
<b>Output:</b>
2.0
4.0

</pre>

<h3>Explanation</h3>
<b>Example case 1:</b>
<p>
There is only one string: aaa with compressed string = a, 3. Therefore length = 2
</p>

<b>Example case 2</b>
<p>
Input strings:<br>
"aaa": "a, 3". Length = 2<br/>
"aab": "a, 2, b, 1". Length = 4 <br/>
"aba": "a, 1, b, 1, a, 1". Length = 6<br/>
"abb": "a, 1, b, 2". Length = 4<br/>
"baa": "b, 1, a, 2". Length = 4<br/>
"bab": "b, 1, a, 1, b, 1". Length = 6<br/>
"bba": "b, 2, a, 1". Length = 4<br/>
"bbb": "b, 3". Length = 2<br/>

Expected value = <b>(2+4+6+4+4+6+4+2)/8 = 32/8 = 4 </b>
</p>