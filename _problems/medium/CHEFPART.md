---
{"category_name":"medium","problem_code":"CHEFPART","problem_name":"Chefina and Swaps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n3 6 7\r\n2\r\n4 4\r\n7\r\n2 3 9 13 14 6 13","output":"1\r\n-1\r\n5","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":"","date_added":"27-08-2020","tags":{"0":"ad","1":"bit","2":"ltime87","3":"medium","4":"psychik","5":"rishup_nitdgp","6":"rishup_nitdgp"},"problem_difficulty_level":"Medium","best_tag":"Ad Hoc","editorial_url":"https://discuss.codechef.com/problems/CHEFPART","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFPART","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME87/hindi/CHEFPART.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME87/bengali/CHEFPART.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME87/mandarin/CHEFPART.pdf), [Russian](https://www.codechef.com/download/translated/LTIME87/russian/CHEFPART.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME87/vietnamese/CHEFPART.pdf) as well.

Chefina calls a sequence *good* if there is no way to divide it into two non-empty contiguous subsequences (not necessarily with equal length) such that the bitwise OR of the elements of one subsequence is equal to the bitwise OR of the elements of the other subsequence.

You are given a sequence of positive integers $A_1, A_2, \ldots, A_N$. Chefina asked Chef to reorder the elements of this sequence (possibly leaving it unchanged) in such a way that the resulting sequence would be good ― if it is possible. However, that was an easy task for Chef, so whenever it is possible to make the given sequence good, Chefina asked him to do it by swapping adjacent pairs of its elements and to use the smallest possible number of swaps.

Find the smallest number of swaps Chef needs to perform in order to make the given sequence good or determine that there is no way to make it good.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the smallest number of swaps Chef needs to make the sequence good or $-1$ if it is impossible.

### Constraints
- $1 \le T \le 1,000$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^6$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $5\cdot 10^5$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 1,000$
- the sum of $N$ over all test cases does not exceed $5,000$

**Subtask #2 (50 points):** original constraints

### Example Input
```
3
3
3 6 7
2
4 4
7
2 3 9 13 14 6 13
```

### Example Output
```
1
-1
5
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>