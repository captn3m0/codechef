---
{"category_name":"medium","problem_code":"INVSMOD2","problem_name":"Inversions","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"11  \r\n10 0  \r\n10 1  \r\n10 2   \r\n10 3  \r\n10 4  \r\n10 5  \r\n10 6  \r\n10 7  \r\n10 8  \r\n10 9   \r\n10 10","output":"1  \r\n1  \r\n0  \r\n1  \r\n0  \r\n0  \r\n0  \r\n1  \r\n1  \r\n0  \r\n0","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ildar_adm","problem_tester":"","date_added":"25-09-2020","tags":{"0":"ildar_adm"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INVSMOD2","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/OCT20/hindi/INVSMOD2.pdf), [Bengali](https://www.codechef.com/download/translated/OCT20/bengali/INVSMOD2.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/OCT20/mandarin/INVSMOD2.pdf), [Russian](https://www.codechef.com/download/translated/OCT20/russian/INVSMOD2.pdf), and [Vietnamese](https://www.codechef.com/download/translated/OCT20/vietnamese/INVSMOD2.pdf) as well.

You are given two positive integers $N, K$, where $K \leq N$. Your goal is to find the number of permutations of $\{1, 2, ..., N\}$ with exactly $K$ [inversions](https://en.wikipedia.org/wiki/Inversion_(discrete_mathematics)). As the answer may be very large, you only need to find it modulo $2$.

###Input:

- The first line contains one integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, two integers $N, K$. 

###Output:
For each test case, print one integer: the number of permutation of $N$ elements with $K$ inversions, modulo $2$.

###Constraints 
- $1 \leq T \leq 100$
- $0 \leq K \leq N \leq 2 \cdot 10^{10}$

###Subtasks
- 10 points : $1 \leq N \leq 200$
- 10 points : $1 \leq N \leq 2000$
- 10 points : $1 \leq N \leq 200\,000$
- 10 points : $1 \leq N \leq 2\,000\,000$
- 60 points : $1 \leq N \leq 2 \cdot 10^{10}$

###Sample Input:
11  
10 0  
10 1  
10 2   
10 3  
10 4  
10 5  
10 6  
10 7  
10 8  
10 9   
10 10  

###Sample Output:
1  
1  
0  
1  
0  
0  
0  
1  
1  
0  
0

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>