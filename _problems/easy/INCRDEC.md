---
{"category_name":"easy","problem_code":"INCRDEC","problem_name":"Increasing Decreasing","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/n4lQT_g7wCA","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"25-06-2020","tags":{"0":"admin3","1":"easy","2":"ltime85","3":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/INCRDEC","time":{"view_start_date":1593277202,"submit_start_date":1593277202,"visible_start_date":1593277202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INCRDEC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME85/hindi/INCRDEC.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME85/bengali/INCRDEC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME85/mandarin/INCRDEC.pdf), [Russian](https://www.codechef.com/download/translated/LTIME85/russian/INCRDEC.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME85/vietnamese/INCRDEC.pdf) as well.

Chef received a new sequence $A_1, A_2, \ldots, A_N$. He does not like arbitrarily ordered sequences, so he wants to permute the elements of $A$ in such a way that it would satisfy the following condition: there is an integer $p$ ($1 \le p \le N$) such that the first $p$ elements of the new (permuted) sequence are strictly increasing and the last $N-p+1$ elements are strictly decreasing.

Help Chef and find a permutation of the given sequence which satisfies this condition or determine that no such permutation exists. If there are multiple solutions, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case:
- If there is no permutation of $A$ that satisfies the given condition, print a single line containing the string `"NO"` (without quotes).
- Otherwise, print two lines.
- The first of these lines should contain the string `"YES"` (without quotes).
- The second line should contain $N$ space-separated integers ― the elements of your permuted sequence.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^5$
- $1 \le A_i \le 2 \cdot 10^5$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 10^3$
- $A_i \le 2 \cdot 10^3$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^4$

**Subtask #2 (50 points):** original constraints

### Example Input
```
5
4
1 3 2 4
4
1 3 2 4
6
1 10 10 10 20 15
5
1 1 2 2 3
4
1 2 3 3
```

### Example Output
```
YES
1 2 3 4
YES
4 3 2 1
NO
YES
1 2 3 2 1
NO
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>