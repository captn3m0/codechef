---
{"category_name":"easy","problem_code":"CAKEDOOM","problem_name":"Doom Bakes Cakes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"kaushik_iska","problem_tester":"anton_lunyov","date_added":"16-04-2012","tags":{"0":"greedy","1":"june12","2":"kaushik_iska","3":"simple"},"editorial_url":"http://discuss.codechef.com/problems/CAKEDOOM","time":{"view_start_date":1339403523,"submit_start_date":1339403523,"visible_start_date":1339407000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>
<i>From the FAQ:</i>
</p>

<h3>What am I allowed to post as a comment for a problem?</h3>

<b>
<ul>
<li>Do NOT post code.</li>
<li>Do NOT post a comment asking why your solution is wrong.</li>
<li>Do NOT post a comment asking if you can be given the test case your program fails on.</li>
<li>Do NOT post a comment asking how your solution can be improved.</li>
<li>Do NOT post a comment giving any hints or discussing approaches to the problem, or what type or speed of algorithm is required.</li>
</ul>
</b>

<h3>Problem Statement</h3>

<p>
Chef Doom has decided to bake a circular cake. He wants to place <b>N</b> colored cherries around the cake in a circular manner. As all great chefs do, Doom doesn't want any two adjacent cherries to have the same color. Chef has unlimited supply of cherries of <b>K</b> ≤ <b>10</b> different colors. Each color is denoted by the digit from the set <b>{0, 1, ..., K – 1}</b>. Different colors are denoted by different digits. Some of the cherries are already placed and the Chef wants you to place cherries in the remaining positions. He understands that there can be many such arrangements, so in the case when the answer is not unique he asks you to find the lexicographically smallest one.
</p>

<p>
What does it mean?
</p>

<p>
Let's numerate positions for the cherries by the numbers <b>1</b>, <b>2</b>, ..., <b>N</b> starting from one of the positions in a clockwise direction. Then the current (possibly partial) arrangement of the cherries can be represented by a string of <b>N</b> characters. For each position <b>i</b> of the arrangement if the cherry of the color <b>C</b> is placed at this position then the <b>i</b><sup>th</sup> character of the string is equal to the digit <b>C</b>. Otherwise, it is equal to the question mark <b>?</b>. We identify the arrangement with the string that represents it.
</p>

<p>
One arrangement is called <i>lexicographically smaller</i> than the other arrangement if at the first position where they differ the first one has smaller digit (we compare only complete arrangements so we don't care about relation between digits and the question mark). For example, the arrangement <b>1230123</b> is lexicographically smaller than <b>1231230</b> since they have first <b>3</b> equal characters but the <b>4</b><sup>th</sup> character in the first arrangement is <b>0</b> and it is less than <b>1</b> which is the <b>4</b><sup>th</sup> character of the second arrangement.
</p>

<p>
<b>Notes</b>
</p>
<ul>
<li> The cherries at the first and the last positions are adjacent to each other (recall that we have a circular cake).
</li><li> In the case <b>N</b> = <b>1</b> any arrangement is valid as long as the color used for the only cherry of this arrangement is less than <b>K</b>.
</li><li> Initial arrangement can be already invalid (see the case 3 in the example).
</li></ul>
<p>

<b>
<p>
Just to make all things clear. You will be given a usual string of digits and question marks. Don't be confused by circular stuff we have in this problem. You don't have to rotate the answer once you have replaced all question marks by the digits. Think of the output like the usual string for which each two consecutive digits must be different but having additional condition that the first and the last digits must be also different (of course if N &gt; 1).
</p>

<p>
Next, you don't have to use all colors. The only important condition is that this string should be lexicographically smaller than all other strings that can be obtained from the input string by replacement of question marks by digits and of course it must satisfy conditions on adjacent digits.
</p>

<p>
One more thing, K here is not the length of the string but the number of allowed colors. Also we emphasize that the given string can have arbitrary number of question marks. So it can have zero number of question marks as well as completely consists of question marks but of course in general situation it can have both digits and question marks.
</p>

<p>
OK. Let's try to formalize things in order to make all even more clear. You will be given an integer K and a string S=S[1]S[2]...S[N] where each S[i] is either the decimal digit less than K or the question mark. We are serious. In all tests string S can have only digits less than K. Don't ask about what to do if we have digit ≥ K. There are no such tests at all! We guarantee this! OK, let's continue. Your task is to replace each question mark by some digit strictly less than K. If there were no question marks in the string skip this step. Now if N=1 then your string is already valid. For N &gt; 1 it must satisfy the following N conditions S[1] ≠ S[2], S[2] ≠ S[3], ..., S[N-1] ≠ S[N], S[N] ≠ S[1]. Among all such valid strings that can be obtained by replacement of question marks you should choose lexicographically smallest one. I hope now the problem is really clear.
</p>
</b>

<h3>Input</h3>
</p><p>
The first line of the input file contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. Each test case consists of exactly two lines. The first line contains an integer <b>K</b>, the number of available colors for cherries. The second line contains a string <b>S</b> that represents the current arrangement of the cherries in the cake.
</p>

<h3>Constraints</h3>
<p><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></p>
<p><b>1</b> ≤ <b>K</b> ≤ <b>10</b></p>
<p><b>1</b> ≤ <b>|S|</b> ≤ <b>100</b>, where <b>|S|</b> denotes the length of the string <b>S</b></p>
<p>Each character in <b>S</b> is either the digit from the set <b>{0, 1, ..., K – 1}</b> or the question mark <b>?</b>

<h3>Output</h3>
</p><p>
For each test case output the lexicographically smallest valid arrangement of the cherries in the cake that can be obtained from the given arrangement by replacement of each question mark by some digit from <b>0</b> to <b>K – 1</b>. If it is impossible to place the cherries output <b>NO</b> (output is case sensitive).
</p>

<h3>Example</h3>

<pre>
<b>Input:</b>
7
1
?
2
?0
10
79259?087
2
??
3
0?1
4
?????
3
012

<b>Output:</b>
0
10
NO
01
021
01012
012
</pre>

<h3>Explanation</h3>

<p>
<b>Case 2.</b> The only possible replacement here is <b>10</b>. Note that we output <b>10</b> since we <b>can not rotate the answer</b> to obtain <b>01</b> which is smaller.
</p>

<p>
<b>Case 3.</b> Arrangement is impossible because cherries at the first and the last positions are already of the same color. Note that <b>K = 10</b> but the string has length <b>9</b>. It is normal. <b>K</b> and <b>|S|</b> don't have any connection.
</p>

<p>
<b>Case 4.</b> There are two possible arrangements: <b>01</b> and <b>10</b>. The answer is the first one since it is lexicographically smaller.
</p>

<p>
<b>Case 5.</b> There are three possible ways to replace question mark by the digit: <b>001</b>, <b>011</b> and <b>021</b>. But the first and the second strings are not valid arrangements as in both of them there exists an adjacent pair of cherries having the same color. Hence the answer is the third string.
</p>

<p>
<b>Case 6.</b> Note that here we do not use all colors. We just find the lexicographically smallest string that satisfies condition on adjacent digit.
</p>

<p>
<b>Case 7.</b> The string is already valid arrangement of digits. Hence we simply print the same string to the output.
</p>