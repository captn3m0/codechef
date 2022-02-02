---
{"category_name":"easy","problem_code":"GTN","problem_name":"E - Guess the Number","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"raushan303","problem_tester":null,"date_added":"1-08-2019","tags":{"0":"bit22019","1":"raushan303"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/GTN","time":{"view_start_date":1569002400,"submit_start_date":1569002400,"visible_start_date":1569002400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GTN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef has a sorted array $A$ of size $N$ consisting of $distinct$ elements which you $\text{don’t know}.$ You will be provided with an integer $X$. You have to check whether $X$ exists in Chef's array or not. If it exists, find out at which index it exists. 
You can ask just $\text{one}$ type of query as follows $:$-

You can ask at-most $q$ such queries.
If you ask a question for an index say $m$, then Chef returns the sum of $K$ elements of his array starting from index $m$, where $\text{K =}$ $2^i$ and $i$ is the maximum value of $integer$ such that $m$ is perfectly divisible by $K$.

For Example, if  $m = 13$ then  $K$ is $1$, if $m = 8$ then  $K$ is $8$, if $m = 12$ then  $K$ is $4$.
So, if say $m$ is 12, i.e. $K$ is 4, Chef will return sum of A[12] + A[13] + A[14] + A[15].

- $NOTE$ - If you will ask for index greater than $N$ then Chef will return $0$.
               
-  $NOTE$ - As for any query Chef will return sum of array elements from $m$ to $m+K-1$. 
   So if $m+K-1$ gets larger than $N$ then Chef will return sum upto last element of the
   array. $\text{For eg : }$ If size of array is 26 and $K$ for $\text{m = 16}$ is $16$, so $m + K - 1$ is $31$.
   Chef will return sum of  A[16 : 26].

###Interaction:

- First, you should read a line containing a single integer $T$ denoting the number of 
  test cases. The description of interaction for $T$ test cases follows-

- For every test case, you have to read two space separated integers 
  $\text{N and X}$, for $\text{subtask 2, N is unknown}$ so when $\text{N is -1}$
  consider you don't know $N$.

- For each test case, you should start by asking questions as follows-
       - To ask a question, print a line containing two space separated integer $1$ and $m$.

       - Then, you must read a line containing a single integer.

- When you think you know index of $X$ in  Chef's array,  print a line containing two
  space separated integers $2$ and index of $X$.

- If $X$ is not present in Chef's array,  print a line containing two
  space separated integers $2$ and $-1$.

- Then, you must read a line containing a single string $Yes$ or $No$. 
  If this string is $Yes$, you should  continue  solving  the  remaining  test  cases,
  otherwise your answer was incorrect and 
  you should immediately terminate your program to receive the $\text{Wrong Answer}$ verdict.

- Don't forget to flush the output after printing each line!

###Constraints 
- $1 \leq T \leq 10$
- $1 \leq N \leq 10^6$
- $1 \leq X \leq 10^6$
- $1 \leq A[i] \leq 10^6$

###Subtasks
- 30 points : $\text{N is known}$.
      - $1 \leq N \leq 10^3$
      - You can ask at most max(44, N) queries. That is, $q = max(44, N).$
- 30 points : $\text{N is known}$
      - $1 \leq N \leq 10^5$
      - $q = 44$
- 65 points : $\text{N is unknown (N = -1)}$
      - $1 \leq N \leq 10^6$
      - $q = 44$

###Example:
                    You                           Grader
                                                   1
	                                               7 8
                    1 3                                                                   
                                                   8
                    2 3
                                                   Yes

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>