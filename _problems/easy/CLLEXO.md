---
{"category_name":"easy","problem_code":"CLLEXO","problem_name":"Jeremy gets a gift","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"sarthakmanna","problem_tester":"","date_added":"20-06-2020","tags":{"0":"avijit_agarwal","1":"breadth","2":"cole2020","3":"dynamic","4":"easy","5":"sarthakmanna"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CLLEXO","time":{"view_start_date":1594838700,"submit_start_date":1594838700,"visible_start_date":1594838700,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CLLEXO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Meanwhile, Candace and Stacy are busy planning to attend the concert of the famous Love Händel. Jeremy will also be attending the event. Therefore, Candace plans to offer the best possible gift to Jeremy.

Candace has $N$ strings, each of length $M$. Each character of each string can either be a lowercase English letter or the character **'#'**. She denotes the substring of $i$-$th$ string starting from the $l$-$th$ character and ending with the $r$-$th$ character as $S_{i}[l, r]$. She has to choose a list $a$ of $N - 1$ numbers such that  
- $1 \leq a_1 \leq a_2 \leq a_3 \leq ... \leq a_{N-1} \leq  M$.
- The final gift string is obtained by appending the substrings $S_{1}[1, a_{1}]$, $S_{2}[a_{1}, a_{2}]$, $S_{3}[a_{2}, a_{3}]$, .., $S_{N-1}[a_{N-2}, a_{N-1}]$, $S_{N}[a_{N-1}, M]$.
- Candace considers the gift to be the most beautiful one if the final gift string is the lexicographically smallest possible string and it doesn't contain the **'#'** character.

Let $P$ = $S_{1}[1, a_{1}]$ + $S_{2}[a_{1}, a_{2}]$ + $S_{3}[a_{2}, a_{3}]$ + .., + $S_{N-1}[a_{N-2}, a_{N-1}]$ + $S_{N}[a_{N-1}, M]$, then $P$ should be the lexicographically smallest string  possible and **it should not contain '#' character**, where **'+'** denotes concatenation of two substrings.

Help Candace find the best possible gift string quickly as she does not want Jeremy to wait for her. Also, it is guaranteed that at least one such valid string exists.

###Input

- The first line contains a single integer $T$ denoting the number of testcases.
- The first line of each test case contains $2$ space separated integers denoting the values of $N$ and $M$ respectively.
- $N$ lines follow. Each line contains a string $S_i$ of length $M$ as described above.

###Output

For every test case, print a line containing lexicographically lowest possible gift string.

###Constraints 
- $1 \leq T \leq 10^4$
- $1 \leq N, M \leq 10^6$
- $|S_i| = M$
- All $S_i$ will contain either a lower English letter (**'a'** to **'z'** ) or the character **'#'** (ASCII $35$).
- Sum of $N * M$ over all test cases for a particular test file does not exceed $10^7$.
- It is guaranteed that a valid solution will always exist.

###Sample Input
	2
	3 3
	xab
	a#z
	caa
	5 4
	pyqs
	vcot
	qbiu
	lihj
	uvmz

###Sample Output
	xabza
	pvcbihjz

###Explanation
For test $1$:

The array $a$ chosen is: $[3, 3]$

The resulting string $P$ is formed by = $S_{1}[1, 3]$ + $S_{2}[3, 3]$ + $S_{3}[3, 3]$ = **xabza**

For test $2$:

The array $a$ chosen is: $[1, 2, 3, 4]$

The resulting string $P$ is formed by = $S_{1}[1, 1]$ + $S_{2}[1, 2]$ + $S_{3}[2, 3]$ + $S_{4}[3, 4]$ + $S_{5}[4, 4]$ = **pvcbihjz**
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>