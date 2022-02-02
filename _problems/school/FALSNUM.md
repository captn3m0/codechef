---
{"category_name":"school","problem_code":"FALSNUM","problem_name":"False Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n9876543211\n12345678999","output":"19876543211\n102345678999","explanation":"It can be proven that the above output strings are the smallest possible numbers from which you can arrive at the correct number in the input.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/3ljf3VqC0DI","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"18-05-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime97"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/FALSNUM","time":{"view_start_date":1624727702,"submit_start_date":1624727702,"visible_start_date":1624727702,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FALSNUM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME97/mandarin/FALSNUM.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME97/bengali/FALSNUM.pdf), [Russian](https://www.codechef.com/download/translated/LTIME97/russian/FALSNUM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME97/vietnamese/FALSNUM.pdf) as well.

One day, Chef's friend gave him a wrong number $W$ containing $N + 1$ digits and said that the actual number $A$ is the **largest** possible number that can be obtained from deleting exactly one digit of $W$. Chef was able to find $A$ but forgot $W$. 

Given $A$, find the **smallest** possible number $W$ of length $N + 1$ without leading $0$'s that is consistent with the story above. We can show that there is always at least one such $W$ consistent with the story.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, an integer $A$. 

###Output
For each testcase, output in a single line string representing the answer to the problem.

###Constraints 
- $1 \leq T \leq 100$
- $0 \leq A_i \leq 9$ for all valid $i$, where $A_i$ denotes the $i$-th digit of $A$
- $A_1 \neq 0$ (no leading zero)
- $10 \leq |A| \leq 5000$, where $|A|$ denotes the number of digits of $A$

###Subtasks
**Subtask #1 (100 points):** Original constraints

###Sample Input
```
2
9876543211
12345678999
```

###Sample Output
```
19876543211
102345678999
```

###Explanation
It can be proven that the above output strings are the smallest possible numbers from which you can arrive at the correct number in the input.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>