---
{"category_name":"hard","problem_code":"REACAR","problem_name":"Rearranging Cartons ","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"yogesh01","problem_tester":null,"date_added":"15-11-2014","tags":{"0":"bit","1":"easy","2":"inpr1502","3":"mergesort","4":"yogesh01"},"time":{"view_start_date":1422633735,"submit_start_date":1422633735,"visible_start_date":1422633735,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Your school has ordered some equipment that has been delivered in a number of very heavy cartons. Each carton has a serial number and the cartons are all lined up in a row. Unfor- tunately, your teacher asked for the cartons to be placed in a particular sequence and you forgot to tell the people who unloaded the cartons about this. You now have to quickly restore the cartons to the correct order before the teacher comes and sees how you have messed up her instructions.</p>
<p>Since the cartons are very heavy, you cannot carry them over long distances. In each step, all you can do is to exchange the position of two adjacent cartons.</p>
<p>For instance, suppose the serial numbers on the cartons in the order in which they are unloaded are 34, 29, 12, 78 and 90 and the order in which the cartons were supposed to be arranged is 90, 29, 78, 34, 12. These cartons can be rearranged in the desired order with 7 exchanges, as follows:</p>
<p>&nbsp;&bull; Exchange 78, 90 &mdash; 34, 29, 12, 90, 78</p>
<p>&nbsp;&bull; Exchange 12, 90 &mdash; 34, 29, 90, 12, 78</p>
<p>&nbsp;&bull; Exchange 34, 29 &mdash; 29, 34, 90, 12, 78</p>
<p>&nbsp;&bull; Exchange 12, 78 &mdash; 29, 34, 90, 78, 12</p>
<p>&nbsp;&bull; Exchange 34, 90 &mdash; 29, 90, 34, 78, 12</p>
<p>&nbsp;&bull; Exchange 29, 90 &mdash; 90, 29, 34, 78, 12</p>
<p>&nbsp;&bull; Exchange 34, 78 &mdash; 90, 29, 78, 34, 12</p>
<p><br/>In this example, it can be shown that 7 exchanges are needed to reorder the cartons as desired.</br/></p>
<p>Clearly, you want to get the job done with minimum eﬀort. Given the initial arrangement of the cartons and the ﬁnal sequence that the teacher wants, your goal is to compute the minimum number of exchanges required to rearrange the cartons in the desired order.</p>
<h3>Input</h3>
<p>The ﬁrst line of input is a single integer N, the total number of cartons. The second line consists of N distinct positive integers, separated by spaces, denoting the serial numbers of the N cartons in the order in which they were unloaded. The third line is another sequence of N integers, denoting the desired order in which the N cartons should be rearranged. The sequence of numbers in the third line is guaranteed to be a permutation of the sequence in the second line.</p>
<h3>Output</h3>
<p>The output should be a single integer, the minimum number of exchanges required to achieve the desired sequence of cartons.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<p><b>Input:</b><br />
5</p>
<p>34 29 12 78 90 </p>
<p>90 29 78 34 12</p>
<p><b>Output:</b></p>
<p>7<font face="sans-serif, Arial, Verdana, Trebuchet MS"><span style="white-space: normal;"> </span></font></p>
