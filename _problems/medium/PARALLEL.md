---
{"category_name":"medium","problem_code":"PARALLEL","problem_name":"Parallel Computing","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"thocevar","problem_tester":"laycurse","date_added":"8-12-2011","tags":{"0":"april12","1":"medium","2":"thocevar"},"editorial_url":"http://discuss.codechef.com/problems/PARALLEL","time":{"view_start_date":1334137522,"submit_start_date":1334137522,"visible_start_date":1334136600,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>Chef needs a program to solve a simple task. The program will start with an array of integers X. After the execution it should hold values X[1] + X[2] + ... + X[i] at all positions 1 &lt;= i &lt;= N. However, he wants this done fast and efficiently. He needs your help to output a program which can be executed in parallel on N machines and will produce a correct result. Note that he needs a program for some fixed size of array 1 &lt;= N &lt;= 1000.

</p><p>A program consists of a series of synchronized steps. Instructions within one step are executed in parallel on multiple (at most N) machines which all have access to the shared memory where the array is located. You should not make any assumptions about the order in which these parallel instructions will be completed, but you can be sure that all instructions in the current step will be completed before any other instruction from the next step. There is only one type of instruction and it has the form "a+b=c". It reads the values X[a], X[b] and writes their sum in X[c]. The program should contain at most 20 steps and the total number of instructions should not exceed 2000.

<h3>Input</h3>
</p><p>Input contains a single positive integer N.

<h3>Output</h3>
</p><p>Output the number of steps in your program. In the following lines describe these steps. First output the number of instructions which should be executed in parallel on this step followed by a list of instructions. All items should be separated by a single space.

<h3>Example</h3>

</p><p><pre>
<b>Input:</b>
6

<b>Output:</b>
3
2 1+2=2 4+5=5
2 2+3=3 5+6=6
3 3+4=4 3+5=5 3+6=6
</pre>

<h3>Explanation</h3>
</p><p>Lets name values in the array with letters from a to f. The table below describes contents of the array after each step:
<table>
<tr><td> </td><td>1</td><td>2</td><td>3</td><td>4</td><td>5</td><td>6</td></tr>
<tr><td>initial values:</td><td>a</td><td>b</td><td>c</td><td>d</td><td>e</td><td>f</td></tr>
<tr><td>after step 1:</td><td>a</td><td>a+b</td><td>c</td><td>d</td><td>d+e</td><td>f</td></tr>
<tr><td>after step 2:</td><td>a</td><td>a+b</td><td>a+b+c</td><td>d</td><td>d+e</td><td>d+e+f</td></tr>
<tr><td>after step 3:</td><td>a</td><td>a+b</td><td>a+b+c</td><td>a+b+c+d</td><td>a+b+c+d+e</td><td>a+b+c+d+e+f</td></tr>
</table></p>