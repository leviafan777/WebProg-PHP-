using System;
public class Kata
{
    public static int Solve(string s)
    {
        int result = 0;
        int max = 0;
        char[] alpha = { 'a', 'e', 'i', 'o', 'u' };

        foreach (char c in s)
        {
            if (!Array.Exists(alpha, element => element == c))
            {
                result += c - 'a' + 1;
            }
            else
            {
                max = Math.Max(max, result);
                result = 0;
            }
        }

        return Math.Max(max, result);
    }
}