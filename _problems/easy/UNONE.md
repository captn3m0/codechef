---
{"category_name":"easy","problem_code":"UNONE","problem_name":"Unpleasant Ones","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/hNKyAAVziek","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lakshya_jain","problem_tester":"","date_added":"21-06-2021","tags":{"0":"lakshya_jain","1":"ltime97","2":"observation","3":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/UNONE","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=UNONE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/UNONE.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/UNONE.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/UNONE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/UNONE.pdf) as well.

The ugliness of a string is defined as the count of two consecutive ones i.e. `"11"` in the given string. For example, the ugliness of string `"10111"` is $2$.  

You are given an array $A$ of $N$ integers and you have to find any ordering of the array such that the ugliness of the concatenated string of the binary representations of the integers (without leading zeros) is minimum.


### Input

- The first line of the input contains an integer $T$ denoting the number of test cases. Then $T$ test cases follow.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1,A_2,\ldots,A_N$.


### Output
For each test case, output an ordering of $A$ such that the ugliness of the array is minimum. If there are multiple answers, you may output any.

### Constraints
- $1 \leq T \leq 1000$
- $1 \leq N \leq 1000$
- $1 \leq A_i \leq 10^9$ 

### Subtasks
**Subtask #1 (100 points):** Original constraints.

### Sample Input
```
2   
3  
3 6 5  
2   
7 6
```

### Sample Output
```
5 6 3  
6 7 
```

### Explanation
**Test Case 1:** The binary representations of $[5, 6, 3]$ are $[101, 110, 11]$ and the concatenated string would be `"10111011"` which has ugliness $3$. This is the minimum possible. $[6, 5, 3]$ is also valid. 

**Test Case 2:** The binary representations of $[6, 7]$ are $[110, 111]$ and the concatenated string would be `"110111"` which has ugliness of $3$. This is the minimum possible. $[7, 6]$ is not valid as it has ugliness of $4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>