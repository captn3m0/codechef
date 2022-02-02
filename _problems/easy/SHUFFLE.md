---
{"category_name":"easy","problem_code":"SHUFFLE","problem_name":"Another Birthday Present!","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 1\r\n1 4 2 3\r\n4 2\r\n1 4 2 3","output":"yes\r\nno","explanation":"**Example case 1:** We may freely swap adjacent elements, so the sequence can be sorted e.g. in the following way: $(1, 4, 2, 3) \\rightarrow (1, 2, 4, 3) \\rightarrow (1, 2, 3, 4)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xw1UO3SsxqI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"s_h_shahin","problem_tester":"","date_added":"19-04-2020","tags":{"0":"ltime83","1":"s_h_shahin","2":"simple","3":"sorting","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SHUFFLE","time":{"view_start_date":1587834602,"submit_start_date":1587834602,"visible_start_date":1587834602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SHUFFLE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME83/hindi/SHUFFLE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME83/bengali/SHUFFLE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME83/mandarin/SHUFFLE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME83/russian/SHUFFLE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME83/vietnamese/SHUFFLE.pdf) as well.

Chef got another sequence as a birthday present. He does not like this sequence very much because it is not sorted. Since you are a good programmer, Chef is asking for your help.

You are given a sequence $A_1, A_2, \ldots, A_N$ and an integer $K$. You may perform any number of operations of the following type (in any order): choose a valid integer $i$ and swap $A_i$ with $A_{i+K}$. Can you sort the sequence this way?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing the string `"yes"` if the sequence can be sorted or `"no"` otherwise (without quotes).

### Constraints
- $1 \le T \le 100$
- $1 \le K \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $10^6$

### Subtasks
**Subtask #1 (50 points):** the sequence $A$ is a permutation of the integers $1$ through $N$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
4 1
1 4 2 3
4 2
1 4 2 3
```

### Example Output
```
yes
no
```

### Explanation
**Example case 1:** We may freely swap adjacent elements, so the sequence can be sorted e.g. in the following way: $(1, 4, 2, 3) \rightarrow (1, 2, 4, 3) \rightarrow (1, 2, 3, 4)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>