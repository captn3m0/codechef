---
{"category_name":"medium","problem_code":"MYSAR","problem_name":"Mysterious Sequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/GOLut9gjs7s","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ki0apa","problem_tester":"","date_added":"11-12-2020","tags":{"0":"cook125","1":"ki0apa","2":"medium","3":"observation","4":"rajarshi_basu"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MYSAR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MYSAR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK125/hindi/MYSAR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK125/mandarin/MYSAR.pdf), [Russian](https://www.codechef.com/download/translated/COOK125/russian/MYSAR.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK125/vietnamese/MYSAR.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK125/bengali/MYSAR.pdf) as well.

**This is an interactive problem.**

Joshua is hiding a sequence $A_1, A_2, \ldots, A_N$, where $N$ is even. He wants to play a game with you. Your goal is to guess the sequence.

First, Joshua tells you $A_1$ and $A_N$. Then, you should ask him queries. In each query, you choose four integers $L_1$, $R_1$, $L_2$ and $R_2$ such that $1 \le L_1 \lt R_1 \le N$ and $1 \le L_2 \lt R_2 \le N$, and Joshua's answer is the maximum of $A_{L_1}, A_{L_1+1}, \ldots, A_{R_1}$ minus the minimum of $A_{L_2}, A_{L_2+1}, \ldots, A_{R_2}$.

Can you find the sequence using no more than $2N$ queries?

### Interaction
- First, you should read a line containing three space-separated integers $N$, $A_1$ and $A_N$.
- Then you may ask queries. To ask a query:
    - Print a line containing the character 'Q' followed by a space and four space-separated integers $L_1$, $R_1$, $L_2$ and $R_2$.
    - Then, read a line containing one integer ― the answer to the query.
- When you think you know the sequence, print a single line containing the character '!' followed by a space and $N$ space-separated integers $A_1, A_2, \ldots, A_N$ describing your guess.

Don't forget to flush the output after printing each line!

### Constraints
- $2 \le N \le 10^5$
- $N$ is even
- $1 \le A_i \le 10^9$ for each valid $i$

### Example
```
You                         Grader
                            4 1 1
Q 1 2 3 4
                            1
Q 3 4 1 3
                            2
! 1 2 3 1
```

### Explanation
Joshua has the sequence $[1, 2, 3, 1]$.

For the first query, the maximum of $A_1, A_2$ is $2$ and the minimum of $A_3, A_4$ is $1$, so the answer to this query is $2 - 1 = 1$.

For the second query, the maximum of $A_3, A_4$ is $3$ and the minimum of $A_1, A_3$ is $1$, so the answer is $3 - 1 = 2$.

Finally, we correctly guess the sequence by printing "! 1 2 3 1".

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>