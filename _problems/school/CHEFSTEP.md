---
{"category_name":"school","problem_code":"CHEFSTEP","problem_name":"Chef and Steps","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/-seJxv-TXCM","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"20-07-2020","tags":{"0":"aryanag_adm","1":"cakewalk","2":"ltime86","3":"rajarshi_basu"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHEFSTEP","time":{"view_start_date":1595696400,"submit_start_date":1595696400,"visible_start_date":1595696400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHEFSTEP","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME86/hindi/CHEFSTEP.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME86/bengali/CHEFSTEP.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME86/mandarin/CHEFSTEP.pdf), [Russian](https://www.codechef.com/download/translated/LTIME86/russian/CHEFSTEP.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME86/vietnamese/CHEFSTEP.pdf) as well.

In order to establish dominance amongst his friends, Chef has decided that he will only walk in large steps of length exactly $K$ feet. However, this has presented many problems in Chef’s life because there are certain distances that he cannot traverse. Eg. If his step length is $5$ feet, he cannot travel a distance of $12$ feet. Chef has a strict travel plan that he follows on most days, but now he is worried that some of those distances may become impossible to travel. Given $N$ distances, tell Chef which ones he cannot travel.

###Input:
- The first line will contain a single integer $T$, the number of test cases.
- The first line of each test case will contain two space separated integers - $N$, the number of distances, and $K$, Chef’s step length.
- The second line of each test case will contain $N$ space separated integers, the $i^{th}$ of which represents $D_i$, the distance of the $i^{th}$ path.


###Output:
For each testcase, output a string consisting of $N$ characters. The $i^{th}$ character should be $1$ if the distance is traversable, and $0$ if not. 

###Constraints 
- $1 \leq T \leq 1000$
- $1 \leq N \leq 1000$
- $1 \leq K \leq 10^9$
- $1 \leq D_i \leq 10^9$

###Subtasks
- 100 points : No additional constraints.

###Sample Input:
````
1
5 3
12 13 18 20 27216
````

###Sample Output:
````
10101
````

###Explanation:
The first distance can be traversed in $4$ steps.    
The second distance cannot be traversed.    
The third distance can be traversed in $6$ steps.    
The fourth distance cannot be traversed.    
The fifth distance can be traversed in $9072$ steps.    


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>