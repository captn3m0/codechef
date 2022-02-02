---
{"category_name":"easy","problem_code":"DIGITSEP","problem_name":"Digits Cannot Separate","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYPY","37":"PYTH","38":"PYTH 3.4","39":"RUBY","40":"SCALA","41":"SCM chicken","42":"SCM guile","43":"SCM qobi","44":"ST","45":"TCL","46":"TEXT","47":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"wittyceaser","problem_tester":"iscsi","date_added":"3-01-2017","tags":{"0":"ad","1":"dynamic","2":"gcd","3":"jan17","4":"medium","5":"wittyceaser"},"editorial_url":"https://discuss.codechef.com/problems/DIGITSEP","time":{"view_start_date":1484731800,"submit_start_date":1484731800,"visible_start_date":1484731800,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/mandarin/DIGITSEP
.pdf">Mandarin Chinese</a>, <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/russian/DIGITSEP
.pdf">Russian</a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN17/vietnamese/DIGITSEP
.pdf">Vietnamese</a> as well.</h3>


<p>Mr. Wilson was planning to record his new Progressive Rock music album called "<b>Digits. Cannot. Separate</b>". Xenny and PowerShell, popular pseudo-number-theoreticists from the Land of Lazarus were called by him to devise a strategy to ensure the success of this new album. Xenny and Powershell took their Piano Lessons and arrived at the Studio in different Trains.</p>

<p>Mr. Wilson, creative as usual, had created one single, long music track <b>S</b>. The track consisted of <b>N</b> musical notes. The beauty of each musical note was represented by a decimal digit from <b>0</b> to <b>9</b>.</p>

<p>Mr. Wilson told them that he wanted to create multiple musical tracks out of this long song. Since Xenny and Powershell were more into the number theory part of music, they didn’t know much about their real workings. Mr. Wilson told them that a <b>separator</b> could be placed between 2 digits. After placing separators, the digits between 2 separators would be the constituents of this new track and the number formed by joining them together would represent the Quality Value of that track. He also wanted them to make sure that no number formed had greater than <b>M</b> digits.</p>

<p>Mr. Wilson had <b>Y</b> separators with him. He wanted Xenny and PowerShell to use at least <b>X</b> of those separators, otherwise he would have to ask them to Drive Home.</p>

<p>Xenny and PowerShell knew straight away that they had to put place separators in such a way that the Greatest Common Divisor <b>(GCD)</b> of all the Quality Values would eventually determine the success of this new album. Hence, they had to find a strategy to <b>maximize</b> the GCD.</p>

<p>If you find the <b>maximum GCD</b> of all Quality Values that can be obtained after placing the separators, Xenny and PowerShell shall present you with a Porcupine Tree.</p>

<p>
<b>Note:</b>
<ul>
<li>
You can read about GCD <a href="https://en.wikipedia.org/wiki/Greatest_common_divisor">here</a>.
</li>
<li>
Greatest Common Divisor of 0 and 0 is defined as 0.
</li>
</p>

<h3>Input</h3>
<p>The first line of input consists of a single integer <b>T</b> - the number of testcases.</p>
<p>Each test case is of the following format:</p>
<p>First line contains a single integer <b>N</b> - the length of the long musical track.</p>
<p>Second line contains the string of digits <b>S</b>.</p>
<p>Third line contains 3 space-separated integers - <b>M</b>, <b>X</b> and <b>Y</b> - the maximum number of digits in a number, the minimum number of separators to be used and the maximum number of separators to be used.</p>

<h3>Output</h3>
<p>For each testcase, output a single integer on a new line - the maximum GCD possible after placing the separators.</p>

<h3>Constraints</h3>
<p><b>Subtask 1: 20 points</b></p>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>18</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>2</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>Y</b> ≤ <b>(N - 1)</b></li>
</ul>
</p>
<p><b>Subtask 2: 80 points</b></p>
<p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>Y</b> ≤ <b>(N - 1)</b></li>
</ul>
</p>
<p>For both <b>Subtask 1 and Subtask 2:</b></p>
<p>
<ul>
<li><b>1</b> ≤ <b>X</b> ≤ <b>Y</b> ≤ <b>(N - 1)</b></li>
<li><b>M</b>*<b>(Y+1)</b> ≥ <b>N</b></li>
<li><b>S</b> may contain leading <b>0</b>s.</li>
</ul>
</p>

<h3>Example</h3>
<b>Input:</b>
<pre>
2
3
474
2 1 1
34
6311861109697810998905373107116111
10 4 25

<b>Output:</b>
2
1
</pre>

<h3>Explanation</h3>
<p><b>Test case 1.</b> </p>
<p>Since only <b>1 separator</b> can be placed, we can only have 2 possibilities:
<p>
    a. <b>4</b> | <b>74</b>
</p>
<p>
The GCD in this case is 2.
</p>
<p>
    b. <b>47</b> | <b>4</b>
</p>
<p>
The GCD in this case is 1.
</p>
</p>
<p>Hence, the maximum GCD is 2.</p>

<p><b>Test case 2.</b></p>
<p>
One of the optimal partitions is:
<b>63</b>|<b>118</b>|<b>61</b>|<b>109</b>|<b>69</b>|<b>78</b>|<b>109</b>|<b>98</b>|<b>90</b>|<b>53</b>|<b>73</b>|<b>107</b>|<b>116</b>|<b>111</b>
</p>
<p>
<b><i>Bonus:</i></b> Decode the above partition to unlock a hidden treasure.
</p>




