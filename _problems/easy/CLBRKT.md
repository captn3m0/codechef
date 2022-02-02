---
{"category_name":"easy","problem_code":"CLBRKT","problem_name":"Doof fires Brackets","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"sarthakmanna","problem_tester":"","date_added":"19-06-2020","tags":{"0":"avijit_agarwal","1":"cole2020","2":"easy","3":"sarthakmanna","4":"stack"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CLBRKT","time":{"view_start_date":1594838700,"submit_start_date":1594838700,"visible_start_date":1594838700,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLBRKT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
You may have tried your level best to help Chef but Dr Doof has managed to come up with his masterplan in the meantime. Sadly, you have to help Chef once again. Dr Doof has designed a parenthesis-inator. It throws a stream of $N$ brackets at the target, $1$ bracket per second. The brackets can either be opening or closing. Chef appears in front of the stream at time $t$. If Chef faces an opening bracket, he gets hit. However, if he faces a closing bracket, he may choose to let it pass through him (Chef is immune to closing brackets). Chef gets a chance to counter attack Doof as soon as he finds a balanced non-empty bracket sequence. Help Chef by providing him the minimum time $x$ at which he will be able to launch his counter attack. If Chef is unable to counter attack, answer $-1$.

Formally, you are given a string $S$ of length $N$ consisting only of opening brackets $($ and closing brackets $)$. The substring of $S$ starting at index $L$ and ending at index $R$, i.e. $S_L S_{L+1} \ldots S_{R}$ is denoted by $S[L, R]$ . Consider $Q$ cases. In the $i^{\text{th}}$ case, Chef appears at time $t_i$ $(1 \leq t_i \leq N)$ and faces all characters from index $t_i$ to $N$. Find the minimum index $x$ $(t_i \leq x \leq N)$ such that the substring $S[t_i, x]$ contains a **non-empty balanced** bracket subsequence containing the same number of opening brackets as $S[t_i, x]$ (i.e., you cannot remove any opening bracket from the substring). If such an $x$ does not exist, print $-1$.

A string $X$ is called a subsequence of a string $Y$ if it is possible to obtain $X$ by erasing some (possibly zero) characters from $Y$ without changing the order of the remaining characters.

A balanced bracket sequence is defined as:  
- an empty string is a balanced bracket sequence.
- if $s$ is a balanced bracket sequence, then so is $(s)$.
- if $s$ and $t$ are balanced bracket sequences, then so is $st$.

$Note :-$ The input files are large. The use of Fast I/O is recommended.

###Input

- The first line contains a single integer $T$ denoting the number of testcases.
- The first line of each test case contains the string $S$.
- The next line contains a single integer $Q$ denoting the number of cases to consider.
- The next line contains $Q$ space separated integers, each denoting $t_i$.

###Output

For each query, print the minimum value of $x$ in a separate line. If no such $x$ exists, print $-1$.


###Constraints 

- $1 \leq T \leq 10^3$
- $1 \leq |S| \leq 10^7$
- $1 \leq Q \leq 10^6$
- $1 \leq t_i \leq N$
- Every character of $S$ is either $($ or $)$.
- Sum of $|S|$ and $Q$ over all testcases for a particular test file does not exceed $10^7$ and $10^6$ respectively.

###Sample Input
	1
	)())((()
	3
	1 7 6

###Sample Output
	3
	8
	-1
	
###Explanation

For the first query, Chef chooses to let $S_1$ pass through him, gets hit by $S_2$ and finally completes a balanced bracket sequence by adding $S_3$ to $S_2$ at time $x$ = $3$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>