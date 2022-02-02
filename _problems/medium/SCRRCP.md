---
{"category_name":"medium","problem_code":"SCRRCP","problem_name":"Chef and Secret Recipe","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"hasinfarhan","problem_tester":null,"date_added":"25-03-2020","tags":{"0":"bitwise","1":"easy","2":"hasinfarhan","3":"ltime82","4":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Bitwise Operation","editorial_url":"https://discuss.codechef.com/problems/SCRRCP","time":{"view_start_date":1585408500,"submit_start_date":1585408500,"visible_start_date":1585408500,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SCRRCP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME82/hindi/SCRRCP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME82/bengali/SCRRCP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME82/mandarin/SCRRCP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME82/russian/SCRRCP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME82/vietnamese/SCRRCP.pdf) as well.

Chef has a secret recipe, represented by a set of $N$ non-negative integers (note that these integers must be pairwise distinct). Under the current circumstances, he has decided to give it away so that people can try it out at home. 

However, Chef is so fond of guessing games that he set one condition: he wants you to guess the integers in the recipe. In order to do that, you may ask Chef at most $K = 5,000$ queries. In each query, you choose a non-negative integer $x$ and Chef's response to this query is the element in the set that has the smallest bitwise XOR with $x$ (it can be proved that this element is unique).

Guess the elements of the set correctly and let the world know Chef's secret recipe!

### Interaction
- First, you should read a line containing a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing a single integer $N$.
- Then, you may ask queries.
    - To ask a query, you should print a line containing two space-separated integers $1$ and $x$ ($0 \le x \lt 2^{60}$).
    - Then, you must read a line containing a single integer ― the answer to your query, or $-1$ if the query is invalid or if you have asked too many queries.
- Finally, you should print a single line containing the integer $2$ followed by a space and $N$ space-separated integers ― the elements of the set in increasing order.
- Then, you must read a line containing a single integer: $1$ if your answer was correct, or $-1$ if it was incorrect. If your answer was correct, you should continue solving the remaining test cases.

Note that when you receive an answer $-1$, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict.

Don't forget to flush the output after printing each line!

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 85$
- $0 \le A_i \lt 2^{60}$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):** $A_i \lt 2^{14}$ for each valid $i$

**Subtask #2 (50 points):** original constraints

### Example
```
You                 Grader
                        1
                        4
1 2
                        2
1 3
                        3
1 7
                        7
1 11
                        10
2 2 3 7 10
                        1
```

### Explanation
**Example case 1:** Chef's set is $\{2, 3, 7, 10\}$. In the first 3 queries, three exact elements of the set are asked, so Chef's answers are these elements themselves. In the last query, the element of the set which has the smallest XOR with $11$ is $10$. On the last line, the elements of the set are printed in increasing order (with a leading $2$).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>