---
{"category_name":"easy","problem_code":"GRUMPMA","problem_name":"Grumpy Granny","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"sachin_yadav","problem_tester":null,"date_added":"19-10-2019","tags":{"0":"dcod2019","1":"dynamic","2":"easy","3":"sachin_yadav","4":"sachin_yadav","5":"subsequence"},"problem_difficulty_level":"Easy","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/GRUMPMA","time":{"view_start_date":1572633000,"submit_start_date":1572633000,"visible_start_date":1572633000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=GRUMPMA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
After the death of their mother, Alphonse and Edward now live with Pinako and Winry.     
Pinako is worried about their obsession with Alchemy, and that they don't give attention to their studies.
   
So to improve their mathematical solving ability, every day she gives a mathematical problem to solve. They can go out to practice Alchemy only after they have solved the problem.
Help them by solving the given problem, so that they can go early today for their Alchemy practice.    
      
Given an array $A$ of $N$ non-negative integers and two integers $K$ and $M$. Find the number of subsequences of array $A$ of length $K$ which satisfies the following property:  
Suppose the subsequence is $S = S_1S_2 \ldots S_K$, then for all $i$ such that $1 \leq i \leq K$,    
 $$ S_i \% M = i \% M $$ 
should hold true, where $S_i$ denotes the $i$-th element of the subsequence, using **1-based indexing**.

As the number of subsequences may be very large, output the answer modulo $1000000007$.     
       
PS: We also proposed the idea of making a look-alike clone through alchemy and keeping it in front of the study table. But it seems impossible to convince Edward to make a clone of his exact same height, and not taller than him. So solving the problem for him was a better choice.   
  

### Input:
- The first line contains $T$, the number of test cases. Then the test cases follow. 
- For every test case, the first line contains $N$, $K$ and $M$.
- For every test case, the second line contains $N$ integers $A_{i}$ ( $1 \leq i \leq N$).


### Output:
For every test case, output in a single line an integer denoting the number of valid subsequences modulo $10^9+7$


### Constraints 
- $1 \leq T \leq 100$  
- $1 \leq N \leq 10^{4}$  
- $1 \leq K \leq N$  
- $\lceil \frac{K}{100}\rceil \leq M \leq  100\times K$    
- $0 \leq A_{i} \leq 10^{9}$    


### Sample Input:
```
1
12 4 3
4 5 6 7 1 4 6 9 0 0 10 2
```

### Sample Output:
```
8
```


### Explanation:  
The subsequences of length $4$, satisfying the given criteria are $[4, 5, 6, 7]$, $[4, 5, 6, 10]$, $[4, 5, 6, 10]$, $[4, 5, 6, 1]$, $[4, 5, 9, 10]$ ,$[4, 5, 6, 4]$ , $[4, 5, 0, 10]$ and $[4, 5, 0, 10]$. This accounts for a total of $8$ valid subsequences.

Let us take one subsequence and see why it satisfies the given property. Consider $[4, 5, 9, 10]$. 
- $ S_1 \% M = 4 \% 3 = 1 = 1 \% 3 = 1 \% M $
- $ S_2 \% M = 5 \% 3 = 2 = 2 \% 3 = 2 \% M $
- $ S_3 \% M = 9 \% 3 = 0 = 3 \% 3 = 3 \% M $
- $ S_4 \% M = 10 \% 3 = 1 = 4 \% 3 = 4 \% M $

All the valid $i$ satisfy the condition, and hence this is a valid subsequence.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>