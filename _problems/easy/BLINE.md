---
{"category_name":"easy","problem_code":"BLINE","problem_name":"BLACK LINE","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"R","49":"COB","50":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"vishal_nnd0","problem_tester":null,"date_added":"16-04-2019","tags":{"0":"vishal_nnd0"},"time":{"view_start_date":1556307900,"submit_start_date":1556307900,"visible_start_date":1556307900,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>This is an **interactive problem**. It means that every time you output something, you must finish with a newline character and flush the output. For example, in C++ use the $fflush(stdout)$ function, in Java — call $System.out.flush()$, in Python — $sys.stdout.flush()$, and in Pascal — $flush(output)$. Only after flushing the output will you be able to read from the input again.

There exists a string of length $N$ which consists only of **W** (white) and **B** (black). Given that there exist $l1$, $r1$, $l2$, $r2$ such that ($ 1 \leq l1 \leq r1 \lt r1 + 1 \lt l2 \leq r2 \leq N $) and $A[i]$ = ‘**B**’ (for $ l1\leq i \leq r1 $ and $ l2 \leq i \leq r2 $) and $A[i]$ = ‘**W**’ (otherwise). These $l1$ to $r1$ and $l2$ to $r2$ are considered as two blocks. You have to ask *not more than* 250 queries to find the values of these $l1, r1, l2, r2$.

###Instructions:
There will be two types of queries.
- **1 l r** where $l$ and $r$ are two integers $1 \leq l \leq r \leq N$ to ask how many blocks (completely or partially lie in between $l$ and $r$ both inclusive). A block intersecting with even one index with $[l, r]$ is said to lie partially. Output of the interactive code will be among 0, 1, 2 which you should read from input.
- **2 l1 r1 l2 r2** where $l1, r1, l2, r2$ are the required values which is the final answer you should print (only once at the end).

###Input :
Only input is an integer $N$ denoting the length of the array.


###Constraints 
- $3 \leq N \leq 10^{18} $

###Sample Input:

<table border = "1">
	<tr>
		<th> Your Program </th> 
		<th> System </th> 
	</tr>
	<tr>
	</tr>
	<tr>
		<th>  </th> 
		<th> 9 </th> 
	</tr>
	<tr>
		<th> 1 1 3 </th> 
		<th>  </th> 
	</tr>
	<tr>
		<th>  </th> 
		<th> 1 </th> 
	</tr>
	<tr>
		<th> 1 4 8 </th> 
		<th>  </th> 
	</tr>
	<tr>
		<th>  </th> 
		<th> 2 </th> 
	</tr>
	<tr>
		<th> 2 3 4 8 8 </th> 
		<th>  </th> 
	</tr>
</table>

###Explanation
The given string is **WWBBWWWBW**
