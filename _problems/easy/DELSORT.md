---
{"category_name":"easy","problem_code":"DELSORT","problem_name":"Deletion Sort","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n3\r\n9 8 7\r\n5\r\n5 3 1 5 2\r\n7\r\n1 5 2 5 3 5 6","output":"3\r\n7\r\n24","explanation":"- In the **first test case** , the good subarrays are: $(1,2), (1,3), (2,3)$.\r\n\r\n    - $(1,2)$ is a good subarray because the remaining array $[7]$ is sorted (we removed $9,8$).  \r\n  \r\n    - $(1,3)$ is a good subarray because the remaining array $[]$ is sorted (we removed $9,8,7$)\r\n \r\n    - $(2,3)$ is a good subarray because the remaining array $[9]$ is sorted  (we removed $8,7$).\r\n\r\n- In the **second test case**, the good subarrays are $(1,2), (1,3), (1,4), (1,5), (2,4), (2,5), (3,5)$.\r\n\r\n- In the **third test case**, there are 24 possible good subarrays.\r\n    - Note that $(2,2)$ is a good subarray because the remaining array $[1 , 2 , 3  , 6]$ is sorted (we removed $5 , 5$).","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"akash_adm","problem_tester":"","date_added":"14-04-2021","tags":{"0":"akash_adm","1":"binary","2":"cook128","3":"easy","4":"two"},"problem_difficulty_level":"Easy-Medium","best_tag":"Binary Search","editorial_url":"https://discuss.codechef.com/problems/DELSORT","time":{"view_start_date":1618772404,"submit_start_date":1618772404,"visible_start_date":1618772404,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DELSORT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK128/mandarin/DELSORT.pdf), [Russian](https://www.codechef.com/download/translated/COOK128/russian/DELSORT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK128/bengali/DELSORT.pdf) as well.

You are given an array $A$ of length $N$. 

Let $F(L,R)$ be the array you get from $A$ after removing all occurrences of $A_L, A_{L+1}, \dots , A_R$. In other words, for each value in $A$ between the indices $L$ and $R$, you delete every occurrence of that value, including occurrences outside the range $[L, R]$.

A pair $(L,R)$ is called good if $1\le L\le R\le N$ and $F(L, R)$ is sorted in non-decreasing order. In the case that $F(L, R)$ is the empty array, we say it is sorted.

Count the number of good pairs.

**Example:** Suppose $A=[1,2,3,5,7,6,8,6,5,8]$. Then $F(4,6)$ is the array we get after deleting all occurrences of the numbers $5,7,6$. Thus, $F(4,6)=[1,2,3,8,8]$. This array is sorted in non-decreasing order, so the pair $(4, 6)$ is good.

###Input:
- The first line of the input contains an integer $T$, denoting the number of test cases.
- The first line of each test case contains an integer $N$, denoting the size of the array.
- The second line of each test case contains $N$ space-separated integers, denoting the array $A$.


###Output:
For each test case, output the number of good subarrays in $A$, in a separate line.

###Constraints 

- $1 \le T \le 10^4$
- $1 \le N \le 2 \times 10^5$
- $1 \le A_i \le 10^9$
- Sum of $N$ over all test cases doesn't exceed $2 \times 10^5$.

###Sample Input:
```
3
3
9 8 7
5
5 3 1 5 2
7
1 5 2 5 3 5 6

```

###Sample Output:
```
3
7
24
```
###EXPLANATION:

- In the **first test case** , the good subarrays are: $(1,2), (1,3), (2,3)$.

    - $(1,2)$ is a good subarray because the remaining array $[7]$ is sorted (we removed $9,8$).  
  
    - $(1,3)$ is a good subarray because the remaining array $[]$ is sorted (we removed $9,8,7$)
 
    - $(2,3)$ is a good subarray because the remaining array $[9]$ is sorted  (we removed $8,7$).

- In the **second test case**, the good subarrays are $(1,2), (1,3), (1,4), (1,5), (2,4), (2,5), (3,5)$.

- In the **third test case**, there are 24 possible good subarrays.
    - Note that $(2,2)$ is a good subarray because the remaining array $[1 , 2 , 3  , 6]$ is sorted (we removed $5 , 5$). 

 


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>