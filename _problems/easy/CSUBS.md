---
{"category_name":"easy","problem_code":"CSUBS","problem_name":"Chef and Subarrays","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 3 \r\n1 2 3\r\n2 1\r\n4 6","output":"0\r\n1","explanation":"**Test Case 1:** $K=3$ and there is only one subarray of length $3$, so no changes are required.\r\n\r\n**Test Case 2:** $K=1$ and the subarrays of length $1$ are $[4]$ and $[6]$. So, at least one modification is required. One possible solution with only one modification is to change $A_2$ to $4$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/VBQqNcjRGMY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"mohan18","problem_tester":"","date_added":"19-05-2021","tags":{"0":"cook129","1":"mohan18","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CSUBS","time":{"view_start_date":1621794602,"submit_start_date":1621794602,"visible_start_date":1621794602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CSUBS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK129/mandarin/CSUBS.pdf), [Russian](https://www.codechef.com/download/translated/COOK129/russian/CSUBS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK129/vietnamese/CSUBS.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK129/bengali/CSUBS.pdf) as well.

Chef is playing a game where he has an array $A$ of $N$ integers, and an integer $K$. He looks at every subarray of length $K$, and writes its sum on a piece of paper. If a number appears as the sum of multiple subarrays of length $K$, then he only writes down that number once.

Chef is lazy and doesn't like to write numbers. You, being a friend of Chef, want to modify the array such that Chef will only write one number on his paper. In one modification you can choose any index $i$ and replace $A_i$ with any integer.

You need to find the minimum number of modifications required.

###Input
- The first line contains an integer $T$, the number of test cases. Then the test cases follow.
- Each test case contains two lines of input.
- The first line contains two space-separated integers $N$, $K$.
- The second line contains $N$ space-separated integers $A_{1}, A_{2}, \ldots, A_{N}$.

###Output
For each test case, output the answer in a single line.

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 10^{5}$
- $1 \leq K \leq N$
- $1 \leq A_{i} \leq 10^{5}$
- The sum of $N$ over all test cases does not exceed $5\cdot 10^{5}$.

###Sample Input
```
2
3 3 
1 2 3
2 1
4 6
```

###Sample Output
```
0
1
```
	
###Explanation
**Test Case 1:** $K=3$ and there is only one subarray of length $3$, so no changes are required.

**Test Case 2:** $K=1$ and the subarrays of length $1$ are $[4]$ and $[6]$. So, at least one modification is required. One possible solution with only one modification is to change $A_2$ to $4$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>