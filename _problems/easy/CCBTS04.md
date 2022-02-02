---
{"category_name":"easy","problem_code":"CCBTS04","problem_name":"Students, heights and their IQs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"23-05-2018","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCBTS04","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
In the school morning assembly, $n$ students standing in a line. You, being the principal of the school know the heights and IQ levels of the students. This information is provided to you by an array $h$ and $iq$, where $h_i, iq_i$ denotes the height and the IQ of the $i$-th student, respectively. 

You want to find the longest subsequence of the students such that their heights are in strictly increasing order, whereas their IQ levels in strictly decreasing order. Note that a subsequence is gotten by removing some (possibly zero) students from the line.

Find out the length of longest such subsequence.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains an integer $n$. 
- The second line contains $n$ space-separated integers $h_1, h_2, \dots, h_n$.
- The third line contains $n$ space-separated integers $iq_1, iq_2, \dots, iq_n$.

### Output
For each test case, print a single line containing one integer — the answer to the problem.

### Constraints 
- $1 \le T \le 5$
- $1 \le n \le 10^3$
- $1 \le h_i, iq_i \le 10^9$

### Sample Input
```
2
3
1 2 3
3 2 1
4
1 3 2 4
5 6 4 4
```

### Sample Output
```
3
2
```

### Explanation
**Example case 1:** You can choose the subsequence {1, 2, 3} of the students. You can see the heights of the students are increasing from left to right, whereas the IQ levels are decreasing.

**Example case 2:** You can choose the subsequence {2, 4} of the students. You can see the height of 4-th student is 4, which is greater than the height of 2-nd student (3). The IQ levels of 4-th student (4) is less than the 2nd student (6). Hence, the answer is 2.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>