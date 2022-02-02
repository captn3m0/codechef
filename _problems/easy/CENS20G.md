---
{"category_name":"easy","problem_code":"CENS20G","problem_name":"Help Martha","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sarthak_eddy","problem_tester":"","date_added":"13-07-2020","tags":{"0":"cens2020","1":"sarthak_eddy","2":"saurabhshadow"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CENS20G","time":{"view_start_date":1597860000,"submit_start_date":1597860000,"visible_start_date":1597860000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CENS20G","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Jonas asked Martha to stand at point $(x_1,y_1)$ on an infinite cartesian plane. He gave her a string $S$ which consists of operations in the form of characters **'R'**, **'L'**, **'U'**, and 
**'D'**.

Each character of the string corresponds to the following movements: 

- **'R'** means moving right by $1$ unit i.e, $(x,y)$ to $(x+1,y)$.
- **'L'** means moving left by $1$ unit i.e, $(x,y)$ to $(x-1,y)$.
- **'U'** means moving up by $1$ unit i.e, $(x,y)$ to $(x,y+1)$.
- **'D'** means moving down by $1$ unit i.e, $(x,y)$ to $(x,y-1)$.

Now, Jonas asks Martha $Q$ queries. In each query, coordinates are given of form $(x_2,y_2)$. Martha needs to tell if it is possible to move from $(x_1,y_1)$ to $(x_2,y_2)$ by choosing a **subsequence** of given string $S$ and performing the operations in sequential order.Starting point $(x_1,y_1)$ remains same for all queries.

If it is possible, print **"YES"** and the length of the smallest possible subsequence of string, else print **"NO"**.

Recall that string $a$ is a **subsequence** of a string $b$ if $a$ can be obtained from $b$ by deletion of several (possibly zero or all) characters. For example, for the string $a$="codechef", the following strings are subsequences: "code", "ee", "odchef", "df", "", and others, but the following are not subsequences: "ced", "eehc", "cofe".

**Note**: Use of Fast IO is recommended.

###Input:

- First line will contain $T$, number of test cases. Then test cases follow.
- For each test case, first line will contain string $S$, string of operations.
- Second line will contain coordinates $x_1$ and $y_1$.
- Third line will contain $Q$, number of queries.
- $Q$ lines follow. Each line will contain coordinates $x_2$ and $y_2$.

###Output:
For each query if subsequence exists then print "YES" (without quotes) and length of smallest possible subsequence separated by a space in new line, else print "NO" (without quotes) in new line.

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq |S| \leq 10^6$
- $-10^8 \leq x_1,x_2,y_1,y_2 \leq 10^8$
- $1 \leq Q \leq 10^5$

###Sample Input:
	1
	RLUDRLUD
	1 2
	2
	2 3
	1 -2

###Sample Output:
	YES 2
	NO
	
###EXPLANATION:
Given String is "RLUDRLUD", $(x_1,y_1)$ is $(1,2)$. We can move from $(1,2)$ to $(2,3)$ in just two operations if we choose subsequence as "RU" or "UR".

Suppose we choose "RU" as a subsequence. 'R' means moving from $(1,2)$ to $(2,2)$. 'U' means moving from $(2,2)$ to $(2,3)$.

In the second query, we can't move from (1,2) to (1,-2) using operations of the given string.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>