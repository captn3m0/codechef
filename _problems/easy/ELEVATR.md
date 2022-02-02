---
{"category_name":"easy","problem_code":"ELEVATR","problem_name":"Elevator","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":"","date_added":"28-08-2020","tags":{"0":"dynamic","1":"greedy","2":"kingofnumbers","3":"kingofnumbers","4":"ltime87","5":"medium","6":"psychik"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/ELEVATR","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ELEVATR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME87/hindi/ELEVATR.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME87/bengali/ELEVATR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/ELEVATR.pdf), [Russian](https://www.codechef.com/download/translated/LTIME87/russian/ELEVATR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME87/vietnamese/ELEVATR.pdf) as well.

Chef's apartment consists of $M$ floors (numbered $1$ through $M$), and there's an elevator that is used to move between different floors. The elevator is connected with a computer which registers its movement in a sequence $B$. Whenever the elevator moves to a different floor, the computer appends the new floor number to sequence $B$. Currently, the sequence $B$ has $N$ elements.

Unfortunately, the computer is infected with a virus which replaced some elements of $B$ by $-1$s. Chef now wants to know what could be the minimum number of times the elevator has changed its direction. That is, how many times the elevator was going up then started going down and vice versa. 

Help chef by answering his question or determine that the sequence $B$ is invalid.


###Input:

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two integers $N$ and $M$. 
- The second line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

###Output:
For each test case, print a single line containing one integer ― the minimum number of times the elevator has changed its direction or $-1$ if the given $B$ sequence is invalid.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 10^5$
- $2 \leq M \leq 10^5$
- $1 \leq B_i \leq M$ or $B_i = -1$ for each valid $i$
- sum of $N$ over all test-cases doesn't exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $10,000$

**Subtask #2 (50 points):** Original constraints

###Sample Input:
```
5
4 5
2 3 4 3
4 5
2 -1 4 3
4 5
1 -1 -1 5
5 4
-1 -1 3 -1 -1
5 5
-1 -1 3 -1 -1
```
###Sample Output:
```
1
1
-1
1
0
```
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>