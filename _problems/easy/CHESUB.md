---
{"category_name":"easy","problem_code":"CHESUB","problem_name":"K-Subarrays","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5 2\r\n1 2 -1 3 1\r\n5 2\r\n-1 2 11 -23 12","output":"11\r\n37","explanation":"- **Test Case 1:** One way to choose $2$ disjoint non-empty subarrays is:\r\n\r\n$S_1 = [1,2]$ and $S_2 = [3,1]$\r\n\r\nThe score is $3\\cdot 1 + 4\\cdot 2 =11$, which is the maximum possible. \r\n\r\n- **Test Case 2:** One way to choose $2$ disjoint non-empty subarrays is:\r\n\r\n$S_1 = [2,11]$ and $S_2 = [12]$\r\n\r\nThe score is $13\\cdot 1+12\\cdot 2 = 37$, which is the maximum possible.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/ZysxKOrjsc8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"cherry0697","problem_tester":"","date_added":"29-05-2021","tags":{"0":"cherry0697","1":"dynamic","2":"easy","3":"ltime96"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CHESUB","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHESUB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/CHESUB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/CHESUB.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/CHESUB.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/CHESUB.pdf) as well.

You are given two integers $N$ and $K$, and an array $A$ of $N$ integers. You have to choose $K$ disjoint non-empty subarrays such that the score is maximized. 

The score is calculated as follows:
$$
\mathrm{Score}= \sum_{i=1}^{K} \mathrm{Sum}[i] \cdot i,
$$

where $\mathrm{Sum}[i]$ denotes sum of elements of $i$-th subarray. By the $i$-th subarray, we mean the $i$-th one in the order from left to right.

Find the maximum score that can be achieved.

**Note:** The subarrays are not required to cover the whole array. It is allowed for some elements of $A$ to belong to none of the subarrays.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line of each test case contains $N$ space-separated integers $A_1,A_2,\dots,A_N$.

### Output
For each test case, print a single line containing one integer ― the maximum score.

### Constraints
- $1 \le T \le 1000$
- $1 \le N \le 10^5$
- $1 \le K \le \min(100,N)$
- $-10^6 \le A_i \le 10^6$
- The sum of $N$ over all test cases does not exceed $10^5$

### Subtasks
- **Subtask #1 (15 points)**: $K=1$
- **Subtask #2 (35 points):** $K=2$
- **Subtask #3 (50 points):** Original constraints

###Sample Input
```
2
5 2
1 2 -1 3 1
5 2
-1 2 11 -23 12
```

###Sample Output
```
11
37
```

### Explanation

- **Test Case 1:** One way to choose $2$ disjoint non-empty subarrays is:

$S_1 = [1,2]$ and $S_2 = [3,1]$

The score is $3\cdot 1 + 4\cdot 2 =11$, which is the maximum possible. 

- **Test Case 2:** One way to choose $2$ disjoint non-empty subarrays is:

$S_1 = [2,11]$ and $S_2 = [12]$

The score is $13\cdot 1+12\cdot 2 = 37$, which is the maximum possible.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>