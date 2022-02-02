---
{"languages_supported":{"0":"NA"},"title":"PRIMES2","category":"NA","old_version":true,"problem_code":"PRIMES2","tags":{"0":"NA"},"layout":"problem"}
---

<h3> All submissions for this problem are available. </h3><p>Chef has been exploring prime numbers lately, and has recently made a conjecture resembling
one of Goldbach's conjectures.
Chef's conjecture is that any odd number greater than 61 can be expressed as the sum of
a prime, a square of a prime, and a cube of a prime.
He wants you to help verify his conjecture for small numbers.</p>
<p>Note: negative numbers are never considered to be prime, nor are 0 and 1.</p>

<h3>Input</h3>
<p>Input will consist of a series of odd numbers greater than 61 and less than 10<sup>6</sup>, 
one per line, terminated by the number 0 on a line by itself.
There will be at most 1000 lines.</p>

<h3>Output</h3>
<p>For each odd number in the input, print 3 primes P<sub>1</sub>, P<sub>2</sub>, P<sub>3</sub> on a line,
where P<sub>1</sub> + P<sub>2</sub><sup>2</sup> + P<sub>3</sub><sup>3</sup> is equal to the number from the input.
If no such primes exist, print "0 0 0" instead (quotes for clarity).
If there are multiple triplets of primes that satisfy the equation, print any such triplet.</p>

<h3>Sample Input</h3>
<pre>81
85
155
0
</pre>

<h3>Sample Output</h3>
<pre>5 7 3
73 2 2
5 5 5
</pre>    